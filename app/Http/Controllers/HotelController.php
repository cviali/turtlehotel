<?php

namespace App\Http\Controllers;

use App\Price;

class HotelController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        // dd($prices);
        return view('hotel', compact('prices'));
    }
}
