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

Route::get('/', function () {
    return view('pages/login');
});

Route::get('dashboard', function () {
    return view('pages/dashboard');
});

Route::get('products', function () {
    return view('pages/product');
});

Route::get('user', function () {
    return view('pages/user');
});

Route::get('order', function () {
    return view('pages/order');
});

Route::get('activation', function () {
    return view('pages/activation');
});

Route::get('register', function () {
    return view('pages/register');
});


