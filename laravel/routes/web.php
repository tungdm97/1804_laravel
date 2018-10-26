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
Route::get('zxccc', function () {
    return view('zxccc');
});
Route::get('post', 'PostController@index');
Route::get('post/store', 'PostController@store');
Route::get('post/update', 'PostController@update');
Route::get('post/delete', 'PostController@delete');
Route::get('category', 'CategoryController@index');

