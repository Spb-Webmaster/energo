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

        return view('search.search', [
            'title' => 'Поиск',
        ]);

    }


    public function store(Request $request)
    {

        if(!$request->text_search){

            session()->flash('search.select', $request->select_search);
            session()->flash('search.text', $request->text_search);

            return view('search.search');
        }

        if ($request->select_search != 0) {


            // perkins = 1
            // Сummins = 2
            // Caterpillar = 3

            switch ($request->select_search) {
                case 1:
                    $query = Perkins::query();
                    break;
                case 2:
                    $test = 2;
                    $query = Cummins::query();
                    break;
                case 3:
                    $test = 3;
                    //  $query = Article::query();
                    break;
            }

            $query->where('title', 'like', "%{$request->text_search}%");
            $query->orWhere('sky', $request->text_search);
            $items = $query->paginate(20)->withQueryString();
        } else {

            $Perkins = Perkins::query()
                ->where('title', 'like', "%{$request->text_search}%")
               ->orWhere('sky', $request->text_search);

            $Cummins = Cummins::query()
                ->where('title', 'like', "%{$request->text_search}%")
               ->orWhere('sky', $request->text_search)
                ->union($Perkins);
            $items = $Cummins->paginate(20); // временно !!!!

        }




        // $items = $query->get();


        session()->flash('search.select', $request->select_search);
        session()->flash('search.text', $request->text_search);

        return view('search.search', [
            'items' => $items,
        ]);

    }

}
