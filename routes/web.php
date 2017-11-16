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


Route::get('/', 'nusantaraController@index');
Route::get('/location', 'nusantaraController@location');
Route::get('/wisata', 'nusantaraController@wisata');
Route::get('/accomodation', 'nusantaraController@accomodation');
Route::get('/foods', 'nusantaraController@foods');
