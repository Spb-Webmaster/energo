<?php

namespace App\Http\Controllers;

use App\Models\Cummins;
use Illuminate\Http\Request;

class CumminsController extends Controller
{
    public function index()
    {


        $items = Cummins::query()->paginate(20);
        $category['title'] = 'Cummins';

        return view('categories.category', [
            'items' => $items,
            'category' => $category,
        ]);
    }

    public function show(Request $request)
    {

        // dd($request->product_item);
        $item = Cummins::query()->where('slug', $request->item)->first();
        $category['title'] = 'Cummins';
        return view('product.product', [
            'item' => $item,
            'category' => $category,
        ]);
    }
}
