<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

