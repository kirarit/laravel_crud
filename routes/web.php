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

Route::get('/','CreatesController@home');
Route::get('/create',function(){
	return view('create');
});
Route::post('/insert','CreatesController@add');
Route::get('/update/{id}','CreatesController@update');
Route::get('/read/{id}','CreatesController@read');
Route::get('/delete/{id}','CreatesController@delete');
Route::get('/restore/{id}','CreatesController@restore');
Route::post('/edit/{id}','CreatesController@edits');

