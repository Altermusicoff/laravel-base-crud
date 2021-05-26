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
    return view('welcome');
});

Route::get('ospiti', 'OspiteController@index');
Route::get('ospiti/{id}', 'OspiteController@show') -> name("show-ospite");
Route::get('ospiti-form', 'OspiteController@create')->name("create-ospite");
Route::post('ospiti', 'OspiteController@store')->name("store-ospite");