<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/adkars', [AdkarController::class, 'index'])->name('adkars.index');

Route::post('/adkars/complete', [AdkarController::class, 'store'])->name('adkars.complete');