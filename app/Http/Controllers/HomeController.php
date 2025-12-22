<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the home page.
     */
    public function index(): View
    {
        return view('home', [
            'stats' => [
                'shipments' => '1,700+',
                'accuracy' => '97.6%',
            ]
        ]);
    }

    /**
     * Handle the contact page.
     */
    public function contact(): View
    {
        return view('contact');
    }
}
