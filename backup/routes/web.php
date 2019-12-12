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
    return view('home');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Detail', function () {
    return view('detail');
});

Route::get('/Cart', function () {
    return view('cart');
});

Route::get('Admin/Figure', function () {
    return view('admin.figure');
});

Route::get('Admin/Figure/Insert', function () {
    return view('admin.figureInsert');
});

//Routes untuk melakukan registrasi
Route::get('/Register', function () {
    return view('register');
});
Route::post('/doRegister', 'AuthController@store');
Route::post('/doLogin','AuthController@login');

//Route::get('/home', 'HomeController@index')->name('home');
