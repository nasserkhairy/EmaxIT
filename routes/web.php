<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoRequestController;

Route::post('/send-demo', [DemoRequestController::class, 'send'])->name('demo.send');

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

Route::get('/data_analysis', function () {
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


Route::get('/ivision_demo', function () {
    return view('../request_demo/ivision_demo');
});
Route::get('/xight_demo', function () {
    return view('../request_demo/xight_demo');
});
Route::get('/ivisionmt-suite-information', function () {
    return view('../information/ivisionmt-suite-information');
});