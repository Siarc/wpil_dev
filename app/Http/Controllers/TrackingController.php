<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TrackingController extends Controller
{
    /**
     * Resolves to the iframe view for primary tracking.
     */
    public function primary(): View
    {
        return view('tracking.primary', [
            'trackingUrl' => 'https://tracking.primelogistics.ae/track'
        ]);
    }

    /**
     * Resolves to the generic view for partner tracking.
     */
    public function partner(): View
    {
        return view('tracking.partner', [
            'partnerUrl' => 'https://gol.gpd.lk/login.aspx?stid=aitkens'
        ]);
    }
}
