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

Route::get('/', 'PagesController@index');
Route::get('/fundacion', 'PagesController@laFundacion');
Route::get('/noticias', 'PagesController@noticias');
Route::get('/patrocinadores', 'PagesController@patrocinadores');
Route::get('/donar', 'PagesController@donar');
Route::get('/contacto', 'PagesController@contacto');

Route::resource('deseos', 'DeseosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
