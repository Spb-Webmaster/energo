<?php

namespace App\Providers;

use App\View\Composers\SelectCategoriesComposer;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot()
    {

/*        Facades\View::composer('include.selectcategories', function (View $view) {

            $view->with('www', 2);

        });*/

        Facades\View::composer('include.nav', MenuComposer::class); // меню
        Facades\View::composer('include.selectcategories', SelectCategoriesComposer::class); //  категории в select
    }
}
