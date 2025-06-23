<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return file_get_contents(public_path('miau_min.html'));
});
