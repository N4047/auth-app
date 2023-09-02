<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function index(Request $request): View
    {
        return view('checkout.index', ['price' => request()->query('price'),
                                       'product' => __('home.' . request()->query('product')),
                                       'period' => __('home.' . request()->query('period'))
                                        ]);
    }
}
