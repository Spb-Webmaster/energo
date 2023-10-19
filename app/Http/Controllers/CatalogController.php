<?php

namespace App\Http\Controllers;

use App\Models\Perkins;
use App\Models\Productcategory;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {

        $categories = Productcategory::query()->get();

        return view('categories.categories', [
            'categories' => $categories,
        ]);

    }

}
