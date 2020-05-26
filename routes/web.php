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

Route::post('insert', 'HomeController@insert')->name('insert');
Route::get('edit/{id}', 'HomeController@edit');
Route::post('edit/{id}','HomeController@update');
Route::get('delete/{id}','HomeController@delete');

