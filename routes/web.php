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
Route::get('/contact', function () {
    return view('contact');
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

// solutions
Route::get('/ivisionmt', function () {
    return view('../portofolio/ivisionmt');
});
Route::get('/xight', function () {
    return view('../portofolio/xight');
});
Route::get('/xpert', function () {
    return view('../portofolio/xpert');
});
Route::get('/trial', function () {
    return view('/trial');
});