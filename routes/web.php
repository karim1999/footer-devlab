<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/en', function () {
    $sites= \App\Site::where("name", "REGEXP", "[A-Za-z]")->with('site_profile')->get();
    $sites= $sites->shuffle();
    return view('index', ["sites" => $sites]);
});

Route::get('/ar', function () {
    $sites= \App\Site::where("name", "REGEXP", "[^a-zA-Z0-9\s]")->with('site_profile')->get();
    $sites= $sites->shuffle();
    return view('ar-index', ["sites" => $sites]);
});

