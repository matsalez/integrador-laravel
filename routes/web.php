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

Route::get('/test', function () {
    return view('welcome');
});
//La Home
Route::get('/index', function () {
    return view('front.index');
});

//Registro

Route::get('/register', function () {
    return view('front.register.index');
});

//login

Route::get('/login', function () {
    return view('front.login.index');
});

//Products

Route::get('/newarrivals', function () {
    return view('front.products.index');
});

//One product
Route::get('/newarrivals/product', function () {
    return view('front.products.product');
});

//One product
Route::get('/faq', function () {
    return view('front.faq.index');
});

//Profile
Route::get('/profile', function () {
    return view('front.user.index');
});
