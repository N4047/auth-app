<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $productname = $request->get('productname');
        $totalprice = (int) $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return redirect()->route('home.index')->with('success', 'Payment was successful.');

    }
    public function cancel()
    {
        return redirect()->route('home.index')->with('cancel', 'Payment was unsuccessful.');

    }
}
