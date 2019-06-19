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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//show form edit cat
Route::get('cats/{id}/edit', 'CatController@edit')->name('cat.edit');
//update cat info
Route::put('cats/{id}', 'CatController@update')->name('cats.update');
//create cat
Route::get('cats', 'CatController@index');
Route::get('cats/create', 'CatController@create')->name('cat-form');
Route::post('cats', 'CatController@store')->name('cat-store');
