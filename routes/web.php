<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\SleepController;
use App\Http\Controllers\TripController;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [IMCController::class, 'index']);
Route::post('/imc/calculate', [IMCController::class, 'calculate']);

Route::get('/sono', [SleepController::class, 'index']);
Route::post('/sono/evaluate', [SleepController::class, 'evaluate']);

Route::get('/viagem', [TripController::class, 'index']);
Route::post('/viagem/calculate', [TripController::class, 'calculate']);
