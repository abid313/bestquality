<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

// rings product

Route::get('/rings/fushia', function () {
    return view('ringfushia');
});

Route::get('/rings/zoeya', function () {
    return view('ringzoeya');
});

Route::get('/rings/eliora', function () {
    return view('ringeliora');
});

Route::get('/rings/leora', function () {
    return view('ringleora');
});