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

Route::get('/Cart', 'CartController@index');
Route::get('/Cart/RemoveDetail/{id}', 'CartController@destroyDetail');

//Figure Routes
Route::get('Admin/Figure', 'FigureController@index');
Route::get('Admin/Figure/Insert', 'FigureController@gotoInsert');
Route::post('Figure/doInsert', 'FigureController@store');
Route::get('Admin/Figure/Update/{id} ', 'FigureController@edit');
Route::post('Figure/doUpdate/{id} ', 'FigureController@update');
Route::get('Figure/doDelete/{id} ', 'FigureController@destroy');

//Routes untuk melakukan registrasi
Route::get('/Register', function () {
    return view('register');
});
Route::post('/doRegister', 'AuthController@store');
Route::post('/doLogin','AuthController@login');
Route::get('/doLogout','AuthController@logout');
Route::post('/addToCart','CartController@store');
Route::post('/doCheckout/{cartId}','CartController@checkout');


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

Route::get('TransactionHistory', 'TransactionController@index');
Route::get('Profile', 'UserController@indexProfile');
Route::get('Profile/Update/{id}', 'UserController@indexUpdateProfile');
Route::get('Admin/User', 'UserController@indexManageUser');
Route::get('Admin/User/{id}', 'UserController@indexManageUserUpdate');
Route::post('Profile/doUpdate/{id}', 'UserController@update');
Route::get('Profile/doDelete/{id} ', 'UserController@destroy');

Route::get('Feedback', function () {
    return view('feedback');
});

