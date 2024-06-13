<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/keluar', function () {
    return view('keluar');
});

Route::get('/contact', function () {
    return view('contact');
});