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


Route::get('/', 'TamuController@index')->name('tamu');
Route::get('/data', 'TamuController@show')->name('tamu.show');
Route::post('/data', 'TamuController@store')->name('tamu.post');
Route::post('/print', 'TamuController@print')->name('tamu.print');


Route::get('/test', 'TamuController@test')->name('tamu.test');
