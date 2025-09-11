<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', ['number' => '080808', 'email' => 'akukuat@gmail.com', 'alamat' => 'jl.kehutanan']);
});

Route::get('/partner', function () {
    $partner = [
        ['name' => 'simba', 'skill' => 'sleeping', 'id' => '1'],
        ['name' => 'mbk laufey', 'skill' => 'uaaaa', 'id' => '2']
    ];

    return view('partner1', ['partner' => $partner]);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/partner/{id}', function ($id) {

    return view('more', ['id' => $id]);
});
