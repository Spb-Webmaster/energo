<?php
namespace App\View\Composers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Productcategory;
use Illuminate\View\View;

class SelectCategoriesComposer
{


    public function compose(View $view): void
    {

        // dd(url()->current());

        $category = Productcategory::query()->orderBy('sorting')->get();
        $view->with('selectcategories', $category);

    }
}
