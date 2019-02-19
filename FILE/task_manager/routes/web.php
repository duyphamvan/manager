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
Route::group(['prefix'=>'customer'],function (){
    Route::get('index','CustomerController@index')->name('index');

    Route::get('create', 'CustomerController@create')->name('create');

    Route::post('store', 'CustomerController@store')->name('store');

    Route::get('{id}/show','CustomerController@show')->name('show');

    Route::post('{id}/edit', 'CustomerController@edit')->name('edit');

    Route::get('{id}/update', 'CustomerController@update')->name('update');

    Route::get('{id}/delete', 'CustomerController@delete')->name('delete');




});