<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'store'])->name('index.store');


Route::get('catalog', [CategoryController::class, 'index'])->name('categories');
Route::get('catalog/{item}', [CategoryController::class, 'show'])->name('category');

Route::post('order', [OrderController::class, 'store'])->name('order');




