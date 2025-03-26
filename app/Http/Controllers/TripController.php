<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {
        return view('viagem');
    }

    public function calculate(Request $request)
    {
        $distance = $request->input('distance');
        $price = $request->input('price');
        $consumption = $request->input('consumption');
        $cost = Trip::calculate($distance, $price, $consumption);
        return view('viagem', compact('cost'));
    }
}
