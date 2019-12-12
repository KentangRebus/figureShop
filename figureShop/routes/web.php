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


Route::get('Admin/Figure/Update ', function () {
    return view('admin.figureUpdate');
});

Route::get('Admin/Category', function () {
    return view('admin.category');
});

Route::get('Admin/Category/Insert', function () {
    return view('admin.categoryInsert');
});

Route::get('Admin/Category/Update ', function () {
    return view('admin.categoryUpdate');
});

Route::get('Admin/Feedback', function () {
    return view('admin.feedback');
});

Route::get('Admin/User', function () {
    return view('admin.user');
});

Route::get('Admin/User/Update', function () {
    return view('admin.userUpdate');
});

Route::get('Admin/Transaction', function () {
    return view('transactionHistory');
});

Route::get('Profile', function () {
    return view('profile');
});

Route::get('Feedback', function () {
    return view('feedback');
});

