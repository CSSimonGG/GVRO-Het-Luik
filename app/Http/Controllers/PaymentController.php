<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function betalen()
    {
        return view('betalen');
    }

    public function betaald()
    {
        return view('betaald');
    }
}
