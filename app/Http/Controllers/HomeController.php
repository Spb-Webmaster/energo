<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
 public function index(){

     return view('index', [
         'index' => true,
     ]);
 }

 public function store(Request $request){

/*     $validated = $request->validate([
         'slug' => ['required', 'unique'],
     ]);

     $Article = Article::create(
         [
             'title' => 'Traveling to Europe',
             'slug' => Str::random(10),
             'sky' => Str::random(12),
             'description' => Str::random(52),
             'shortdescription' => Str::random(152),
             'price' => 348,

         ])->categories()->sync([1]);

     $user = auth()->user();
     return view('index', [
         'user' => $user,
     ]);*/

 }

}
