<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', ['number' => '080808', 'email' => 'akukuat@gmail.com', 'alamat' => 'jl.kehutanan']);
});

Route::get('/partner', [NinjaController::class, 'index' ])->name('partner1');

Route::get('/create', [NinjaController::class, 'create'])->name('create');

Route::get('/partner/{id}', [NinjaController::class, 'show'])->name('more');

Route::post('/partner', [NinjaController::class, 'store'])->name('store');