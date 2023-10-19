<?php

namespace App\Providers;

/*use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\CategoryResource;*/

use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\PerkinsResource;
use App\MoonShine\Resources\CumminsResource;
use App\MoonShine\Resources\ProductcategoryResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

            MenuGroup::make(__('Раздел'), [
                MenuItem::make(__('Категории'), new CategoryResource())
                    ->translatable()
                    ->icon('users'),

            ])->translatable(),

            MenuGroup::make(__('Каталог'), [
                MenuItem::make(__('Бренды'), new ProductcategoryResource())
                    ->translatable()
                    ->icon('users'),

            ])->translatable(),
            MenuGroup::make(__('Продукция'), [
                MenuItem::make(__('Товары'), new ArticleResource())
                    ->translatable()
                    ->icon('users'),

            ])->translatable(),
            MenuGroup::make(__('Perkins'), [
                MenuItem::make(__('Товары'), new PerkinsResource())
                    ->translatable()
                    ->icon('users'),

            ])->translatable(),
            MenuGroup::make(__('Cummins'), [
                MenuItem::make(__('Товары'), new CumminsResource())
                    ->translatable()
                    ->icon('users'),

            ])->translatable(),
      /*      MenuItem::make('Documentation', 'https://laravel.com')
                ->badge(fn() => 'Check'),*/
        ]);
    }
}
