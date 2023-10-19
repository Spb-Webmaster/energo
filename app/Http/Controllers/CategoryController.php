<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::query()->get();

        return view('categories.categories', [
            'categories' => $categories,
        ]);
    }

    public function show(Request $request)
    {


        $category = Category::query()->where('slug', $request->item)->first();
        $items = Article::query()->with('categories')->paginate(20);

        return view('categories.category', [
            'category' => $category,
            'items' => $items,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        //  Order::create($request->all());
        //    system_message(_('Сообщение доставлено'), 'success');

        $query = Article::query();


            $query->where('title', 'like', "%{$request->text_search}%");
            $query->orWhere('sky',  $request->text_search);

            if($request->select_search) { // select  выбор категории
                $query->whereHas('categories', $filter = function ($cat) use ($request) {
                    $cat->where('categories.id', $request->select_search);
                });
            }




        // $items = $query->get();
         $items = $query->paginate(20);

         session()->flash('search.select', $request->select_search);
         session()->flash('search.text', $request->text_search);

        return view('categories.category', [
            'items' => $items,
        ]);

    }

}
