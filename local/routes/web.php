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
    return view('welcome');
});
Route::get('/login','UserController@getLogin')->middleware('checklogin');
Route::post('/login','UserController@postLogin');

Route::get('/home','UserController@getHome')->name('home');
Route::get('/cart','UserController@getCart');
Route::post('/cart','UserController@postCart')->name('cart');
Route::post('/addtocart','UserController@addToCart');
Route::post('/removeProductInCart','UserController@removeProductInCart');

Route::post('/order','UserController@postOrder')->name('order');
Route::get('/product','UserController@getProduct');
Route::get('/order','UserController@getOrder');
Route::get('/order_success','UserController@getOrder_success');

//<=====================admin=======================>
Route::get('/admin_addProduct','UserController@getAdmin_addProduct')->middleware('checkadmin');
Route::get('/admin_listProduct','UserController@getAdmin_listProduct')->middleware('checkadmin');
Route::post('/admin_addProduct','UserController@postAddProduct')->middleware('checkadmin');
Route::get('/admin_editProduct/{id}','UserController@getEditProduct')->middleware('checkadmin')->name('admin_editProduct');
Route::post('/admin_editProduct/{id}','UserController@postEditProduct')->middleware('checkadmin')->name('admin_editProduct');
Route::get('/admin_listProduct/{id}','UserController@getDeleteProduct')->middleware('checkadmin')->name('admin_listProduct');

Route::get('/admin_listOrder','UserController@getAdmin_listOrder')->middleware('checkadmin')->name('admin_listOrder');


//Search
Route::get('/search','UserController@searchController')->name('search');
Route::get('/test','UserController@test');