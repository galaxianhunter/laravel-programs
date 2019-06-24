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
    return view('Country');
});
Route::post('Country','CountryController@store')->name('countrylists.store');
Route::get('select','CountryController@fetch')->name('countrylists.fetch');
Route::post('select','CountryController@storeagain')->name('SecondModels.storeagain');
Route::get('select/list','CountryController@list')->name('SecondModels.list');

