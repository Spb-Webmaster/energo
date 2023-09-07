<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

use Leeto\MoonShineTree\Resources\TreeResource;

class CategoryResource extends TreeResource
{
    public static string $model = Category::class;

    public static string $title = 'Categories';

    public static string $orderField = 'sorting';

    public string $titleField = 'title';


    public function fields(): array
    {
        return [
            ID::make()->sortable(),

            Grid::make([
                Column::make([
                    Text::make(__('Имя'), 'title')
                        ->required(),
                    Slug::make('alias', 'slug')->from('title')
                        ->separator('-')
                        ->unique()
                        ->hideOnIndex(),
                    Image::make(__('Изображение'), 'img')
                        ->hint(__('Логотип'))
                        ->dir('/images')/* Директория где будут хранится файлы в storage (по умолчанию /) */
                        ->disk('public') // Filesystems disk
                        ->allowedExtensions(['jpg', 'gif', 'png', 'svg'])/* Допустимые расширения */
                        ->removable(),

                    Textarea::make(__('Краткое описание'), 'short_description')
                        ->hideOnIndex(),
                    TinyMce::make(__('Описание'), 'description')
                        ->hideOnIndex(),
                    TinyMce::make(__('Дополнительное описание'), 'description2')
                        ->hideOnIndex(),
                ])->columnSpan(8),
                Column::make([
                    Text::make(__('MetaTitle'), 'meta_title')
                        ->hideOnIndex(),
                    Text::make(__('MetaDescripton'), 'meta_description')
                        ->hideOnIndex(),
                    Text::make(__('MetaKeywords'), 'meta_keywords')
                        ->hideOnIndex(),

                ])->columnSpan(4),
            ])
        ];
    }


    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function treeKey(): ?string
    {
        return 'parent_id';
    }

    public function sortKey(): string
    {
        return 'sorting';
    }
}
