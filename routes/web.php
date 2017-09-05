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

Auth::routes();

Route::group(['prefix'=>'home'],function(){

	Route::get('/add','HomeController@add');
	Route::post('/','HomeController@insert');

	Route::get('//{id}/delete','HomeController@delete');

	Route::get('/{id}','HomeController@detail');
	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/{id}/edit','HomeController@edit');
	Route::put('/{id}','HomeController@update');
});