<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CumminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PerkinsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'store'])->name('index.store'); // временно

/*
Route::get('catalog', [CategoryController::class, 'index'])->name('categories');
Route::get('catalog/{item}', [CategoryController::class, 'show'])->name('category');
*/


Route::get('search', [SearchController::class, 'show'])->name('search');

Route::post('order', [OrderController::class, 'store'])->name('order');

//Route::get('product/{product_item}', [ArticleController::class, 'show'])->name('product');

Route::get('catalog/perkins', [PerkinsController::class, 'index'])->name('list.perkins');
Route::get('catalog/perkins/{item}', [PerkinsController::class, 'show'])->name('perkins');

Route::get('catalog/cummins', [CumminsController::class, 'index'])->name('list.cummins');
Route::get('catalog/cummins/{item}', [CumminsController::class, 'show'])->name('cummins');

Route::get('catalog', [CatalogController::class, 'index'])->name('catalog');

