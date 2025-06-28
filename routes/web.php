<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdkarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/adkars/{type}', [AdkarController::class, 'index']);

Route::post('/adkars/complete', [AdkarController::class, 'store'])->name('adkars.complete');