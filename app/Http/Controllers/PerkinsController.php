<?php

namespace App\Http\Controllers;

use App\Models\Perkins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PerkinsController extends Controller
{
    public function index()
    {


        $items = Perkins::query()->paginate(20);
        $category['title'] = 'Перкинс';

        return view('categories.category', [
            'items' => $items,
            'category' => $category,
        ]);
    }

    public function show(Request $request)
    {

        // dd($request->product_item);
        $item = Perkins::query()->where('slug', $request->item)->first();
        $category['title'] = 'Перкинс';
        return view('product.product', [
            'item' => $item,
            'category' => $category,
        ]);
    }
}
