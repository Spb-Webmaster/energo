<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        Order::create($request->all());
        system_message(_('Сообщение доставлено'), 'success');
        return redirect()->back();

    }
}
