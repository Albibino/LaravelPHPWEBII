<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imc;

class IMCController extends Controller
{
    public function index()
    {
        return view('imc');
    }

    public function calculate(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        $imcValue = Imc::calculate($weight, $height);

        return view('imc', compact('imcValue'));
    }
}
