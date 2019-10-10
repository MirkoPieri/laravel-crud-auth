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
Auth::routes();

Route::get('/', 'ControllerCat@index') -> name('cat.index');
Route::get('/cat/{id}', 'ControllerAuth@show') -> name('cat.show');
Route::get('/cat', 'ControllerAuth@create') -> name('cat.create');
Route::post('/', 'ControllerAuth@store') -> name('cat.store');
Route::get('/edit/{id}', 'ControllerAuth@edit') -> name('cat.edit');
Route::post('/edit/{id}', 'ControllerAuth@update') -> name('cat.update');
Route::get('/destroy/{id}', 'ControllerAuth@destroy') -> name('cat.destroy');
