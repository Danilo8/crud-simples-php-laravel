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

Route::get('/', 'AgendaController@index');
Route::get('/cadastro', 'AgendaController@create');
Route::get('/view/{id}', 'AgendaController@show');
Route::get('/editar/{id}', 'AgendaController@edit');

Route::post('/store', 'AgendaController@store');
Route::put('/editar/{id}', 'AgendaController@update');
Route::delete('/deletar/{id}', 'AgendaController@destroy');