<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // $prices = Price::all();
        // dd($prices);
        return view('payment');
    }
}
