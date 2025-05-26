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

// Services
Route::get('/customSD', function () {
    return view('../services/customSD');
});

Route::get('/data_analyrics', function () {
    return view('..services/data_analyrics');
});
Route::get('/digital_markting', function () {
    return view('../services/digital_markting');
});
Route::get('/consultation', function () {
    return view('../services/consultation');
});