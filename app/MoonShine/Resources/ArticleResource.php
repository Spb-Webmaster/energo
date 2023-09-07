<?php

namespace App\MoonShine\Resources;

//use App\MoonShine\Resources\fields\ItemImg;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\MoonShine\Action\ImportArticleAction;

use MoonShine\Actions\ExportAction;
use MoonShine\Actions\ImportAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\BelongsToMany;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class ArticleResource extends Resource
{
	public static string $model = Article::class;

	public static string $title = 'Articles';

	public function fields(): array
	{
        return [
            ID::make()->sortable()->showOnExport()->useOnImport(),

            Grid::make([
                Column::make([
                    Block::make('Продукт', [


                        Text::make('Наименование', 'title')
                            ->useOnImport()
                            ->showOnExport()
                            ->hint('Обязательное поле')
                            //  ->addLink('link', 'https://spb-webmaster.ru', '_blank')
                            ->required(),
                        Slug::make('alias', 'slug')->from('title')
                            ->useOnImport()
                            ->showOnExport()
                            ->separator('-')
                            ->unique()
                            ->hideOnIndex(),

                        Text::make('Артикул', 'sky')
                            ->useOnImport()
                            ->showOnExport()
                            ->hint('Обязательное поле')
                            //  ->addLink('link', 'https://spb-webmaster.ru', '_blank')
                            ->required(),
                        Image::make('Изображение', 'img')
                            ->hint('На витрину')
                            ->hideOnIndex()

                            ->dir('/images') /* Директория где будут хранится файлы в storage (по умолчанию /) */
                            ->disk('public') // Filesystems disk
                            ->allowedExtensions(['jpg', 'gif', 'png', 'svg']) /* Допустимые расширения */
                            ->removable(),
/*
                        ItemImg::make('Изображение', 'Item-img')
                            ->hideOnIndex(),*/

                        MediaLibrary::make('Галерея', 'gallery')
                            ->hideOnIndex()
                            ->removable()
                            ->multiple(),


                        Block::make('Краткое описание', [

                            Textarea::make('Краткое описание', 'shortdescription')
                                ->useOnImport()
                                ->hideOnIndex()
                                ->fieldContainer(false),

                        ]),
                        Block::make('Описание', [

                            TinyMce::make('description')
                                ->useOnImport()
                                ->hideOnIndex()
                                ->fieldContainer(false),

                        ]),



                    ]),
                ])->columnSpan(8),
                Column::make([
                    Block::make('Дополнительно', [

                        BelongsTo::make('Автор', 'author', 'name')
                            ->searchable()
                            ->hideOnIndex(),

                        belongsToMany::make('Категория', 'cat', 'title')

                            ->showOnExport()
                            ->searchable()
                            ->select()
                            ->inLine(separator: ' ', badge: true)
                      //      ->hideOnIndex()

                    ]),
                    Block::make('Стоимость товара', [

                        Text::make('Цена', 'price')
                            ->useOnImport()
                            ->showOnExport(),



                    ]),
                ])->columnSpan(4),

            ]),

        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return [
            'id',
            'title',
            'sky'
        ];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
            ExportAction::make('Export')->showInLine()->queue(),
            ImportArticleAction::make('Import')->showInLine()->queue(),
        ];
    }
}
