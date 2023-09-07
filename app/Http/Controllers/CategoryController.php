<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function index() {

     $categories = Category::query()->get();

     return view('categories.categories', [
         'categories' => $categories,
     ]);
 }

 public function show(Request $request) {


     $category = Category::query()->where('slug' , $request->item)->first();
     $items = Article::query()->with('categories')->paginate(20);

     return view('categories.category', [
         'category' => $category,
         'items' => $items,
     ]);
 }

}
