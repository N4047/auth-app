<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'confirmed' => 30,
            'deaths'    => 20,
            'recovered' => 50,
        ];
        return view('dashboard.index', ['stats' => $stats]);
    }

}
