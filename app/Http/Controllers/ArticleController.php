<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

    }

    public function show(Request $request)
    {

       // dd($request->product_item);
        $item = Article::query()->where('slug', $request->product_item)->with('categories')->first();

        return view('product.product', [
            'item' => $item,
        ]);
    }
}
