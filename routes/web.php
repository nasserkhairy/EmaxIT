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
Route::get('/customSD', function () {
    return view('customSD');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/data_analyrics', function () {
    return view('data_analyrics');
});
Route::get('/digital_markting', function () {
    return view('digital_markting');
});
Route::get('/consultation', function () {
    return view('consultation');
});