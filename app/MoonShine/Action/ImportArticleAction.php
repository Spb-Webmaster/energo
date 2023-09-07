<?php

declare(strict_types=1);

namespace App\MoonShine\Action;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use MoonShine\Actions\Action;
use MoonShine\Contracts\Fields\HasDefaultValue;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Exceptions\ActionException;
use MoonShine\Fields\BelongsToMany;
use MoonShine\Fields\Field;
use MoonShine\Fields\Slug;
use MoonShine\Jobs\ImportActionJob;
use MoonShine\MoonShineUI;
use MoonShine\Notifications\MoonShineNotification;
use MoonShine\Traits\WithQueue;
use MoonShine\Traits\WithStorage;
use OpenSpout\Common\Exception\IOException;
use OpenSpout\Common\Exception\UnsupportedTypeException;
use OpenSpout\Reader\Exception\ReaderNotOpenedException;
use Rap2hpoutre\FastExcel\FastExcel;

class ImportArticleAction extends Action
{
    use WithStorage;
    use WithQueue;

    protected static string $view = 'moonshine::actions.import';
    public string $inputName = 'import_file';
    protected ?string $icon = 'heroicons.outline.paper-clip';
    protected bool $deleteAfter = false;

    protected string $csvDelimiter = ',';

    public function delimiter(string $value): static
    {
        $this->csvDelimiter = $value;

        return $this;
    }

    /**
     * @throws IOException
     * @throws ActionException
     * @throws ReaderNotOpenedException
     * @throws UnsupportedTypeException
     */
    public function handle(): RedirectResponse
    {
        if (!request()->hasFile($this->inputName)) {

            MoonShineUI::toast(
                __('moonshine::ui.resource.import.file_required'),
                'error'
            );

            return back();
        }

        $requestFile = request()->file($this->inputName);


        if (!in_array(
            $requestFile->getClientOriginalExtension(),
            ['csv', 'xlsx']
        )) {
            MoonShineUI::toast(
                __('moonshine::ui.resource.import.extension_not_supported'), // расширение не поддерживается
                'error'
            );

            return back();
        }

        if (is_null($this->resource())) {
            throw new ActionException('Resource is required for action'); // Для действий требуются ресурсы
        }

        $this->resolveStorage();


        $path = request()->file($this->inputName)->storeAs(
            $this->getDir(),
            str_replace('.txt', '.csv', (string)$requestFile->hashName()),
            $this->getDisk()
        );

        $path = Storage::disk($this->getDisk())
            ->path($path);

        if ($this->isQueue()) {
         //   dd(__('moonshine::ui.resource.queued'));

            ImportArticleActionJob::dispatch(
                $this->resource()::class,
                $path,
                $this->deleteAfter,
                $this->getDelimiter()
            );
            MoonShineUI::toast(
                __('moonshine::ui.resource.queued')
            );
            return back();
        }

        self::process(
            $path,
            $this->resource(),
            $this->deleteAfter,
            $this->getDelimiter()
        );

        MoonShineUI::toast(
            __('moonshine::ui.resource.import.imported'),
            'success'
        );

        return back();
    }


    public function getDelimiter(): string
    {
        return $this->csvDelimiter;
    }


    public static function process(
        string           $path,
        ResourceContract $resource,
        bool             $deleteAfter = false,
        string           $delimiter = ','
    ): Collection
    {
        $fastExcel = new FastExcel(); // пакет FastExcel

        if (str($path)->contains('.csv')) {
            $fastExcel->configureCsv($delimiter);
        }

        $result = $fastExcel->import($path, function ($line) use ($resource) {


            $data = collect($line)->mapWithKeys(
                function ($value, $key) use ($resource) {


                    $field = $resource->getFields()->importFields()->first(
                        fn($field): bool => $field->field() === $key || $field->label() === $key
                    );

                    if ($key == 'categories') {
                        return ['categories' => $value];
                    }


                    if (!$field instanceof Field) {
                        return [];
                    }


                    if (empty($value)) {
                        $value = $field instanceof HasDefaultValue
                            ? $field->getDefault()
                            : ($field->isNullable() ? null : $value);
                    }


                    return [$field->field() => $value];


                }

            )->toArray();


            if (($data[$resource->getModel()->getKeyName()] ?? '') === '') {
                unset($data[$resource->getModel()->getKeyName()]);
            }

            if ($data === []) {
                return false;
            }


            $data['slug'] = (isset($data['slug'])) ? $data['slug'] : Str::slug($data['title'], '-').'-'. $data['sky'];

            // если есть id  isset($data[$resource->getModel()->getKeyName()])
            $item = isset($data[$resource->getModel()->getKeyName()])
                ? $resource->getModel()
                    ->newModelQuery()
                    ->findOrNew($data[$resource->getModel()->getKeyName()])
                : $resource->getModel();


            if ($data['categories']) {
                return  Article::updateOrCreate(['id'=>($data['id'])??null],$data)
                       ->categories()->sync(explode(".", strval($data['categories'])));
            }
            return  Article::updateOrCreate(['id'=>($data['id'])??null],$data);

//            return $resource->save(
//                $item, /*(Model)*/
//                fields: $resource->getFields()->importFields(), /*(Collection fields)*/
//                saveData: $data /*(Data)*/
//            );

        });

        if ($deleteAfter) {
            unlink($path);
        }

        MoonShineNotification::send(
            trans('moonshine::ui.resource.import.imported')
        );

        return $result;
    }

    public function deleteAfter(): self
    {
        $this->deleteAfter = true;

        return $this;
    }
}
