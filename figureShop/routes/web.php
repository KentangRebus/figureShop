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

Route::get('/', 'HomeController@index');

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Detail/{id}', 'DetailController@index');

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
Route::get('/doLogout','AuthController@logout');
Route::post('/addToCart','CartController@store');

Route::get('Admin/Figure/Update ', function () {
    return view('admin.figureUpdate');
});

Route::get('Admin/Category', 'CategoryController@index');
Route::get('Admin/Category/Insert', function () {
    return view('admin.categoryInsert');
});
Route::post('Admin/Category/doInsert', 'CategoryController@store');
Route::post('Admin/Category/doDelete/{id}', 'CategoryController@destroy');
Route::post('Admin/Category/Update/{id}', 'CategoryController@updatePage');
Route::post('Admin/Category/doUpdate/{id}', 'CategoryController@update');

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

