<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Cummins;
use App\Models\Perkins;
use App\Models\Productcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class SearchController extends Controller
{

    public function show(Request $request)
    {
      // dump($request);
        $query = Perkins::query();
        $query->where('title', 'like', "%{$request->text_search}%");
        $query->orWhere('sky', $request->text_search);
        $items = $query->paginate(20);
        $items->appends(['text_search' => $request->text_search]);

       // dump($items);
        return view('search.search', [
            'items' => $items,
            'title' => 'Поиск',
        ]);
    }




}
