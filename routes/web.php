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
Route::get('breeds', 'BreedController@index')->name('list-breed');
//Show form create Breed
Route::get('breeds/create', 'BreedController@create')->name('form-create-breed');
//Store breed
Route::post('breeds', 'BreedController@store')->name('store-breed');
