<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function updatePrice(Request $request)
    {
        // dd($request->price);
        Price::where('id', $request->id)->update(['price' => $request->price]);

        session()->flash('status', 'Price successfully updated.');
        return redirect()->back();
    }

    public function index()
    {
        return view('home');
    }
}
