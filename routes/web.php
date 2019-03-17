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

Route::get('', ['uses' => 'BaseController@home', 'as' => 'home']);
Route::get('application', ['uses' => 'BaseController@application', 'as' => 'application']);

Route::get('products', ['uses' => 'BaseController@products', 'as' => 'products']);
Route::get('product', ['uses' => 'BaseController@productDetail', 'as' => 'product-detail']);
Route::get('consultancy', ['uses' => 'BaseController@consultancy', 'as' => 'consultancy']);
Route::get('contact', ['uses' => 'BaseController@contact', 'as' => 'contact']);
Route::post('contact', ['uses' => 'BaseController@postContact', 'as' => 'post-contact']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
