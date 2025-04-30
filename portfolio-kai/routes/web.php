<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/projects', function () {
    return view('projects');
});
