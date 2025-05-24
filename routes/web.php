<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/solutions', function () {
    return view('solutions');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/Portfolio', function () {
    return view('trial');
});

Route::get('/welcome', function () {
    return view('welcome');
});