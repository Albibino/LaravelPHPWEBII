<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sleep;

class SleepController extends Controller
{
    public function index()
    {
        return view('sono');
    }

    public function evaluate(Request $request)
    {
        $sleepTime = $request->input('sleep_time');
        $wakeTime = $request->input('wake_time');

        $result = Sleep::evaluate($sleepTime, $wakeTime);

        return view('sono', [
            'hours' => $result['hours'], 
            'evaluation' => $result['evaluation'],
            'sleep_time' => $sleepTime,
            'wake_time' => $wakeTime
        ]);
    }
}