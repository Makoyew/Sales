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
    return view('sales');
});

Route::get('/unit', function () {
    return view('units');
});

Route::get('/category', function () {
    return view('categories');
});

Route::get('/merchandise', function () {
    return view('merchandises');
});
