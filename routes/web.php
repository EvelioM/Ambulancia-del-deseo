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

Route::get('/deseos', 'DeseosController@index');
Route::post('/deseos', 'DeseosController@store');
Route::get('/deseos/create', 'DeseosController@create');
Route::get('/deseos/{deseo}', 'DeseosController@show');

Route::get('/dates', 'VolunteersController@index');
Route::post('/event/add', 'VolunteersController@addEvent');
Route::get('/deseos/assign/{deseo}', 'DeseosController@assignResources');
Route::post('/deseos/grant', 'DeseosController@grant');
Route::delete('/deseos/destroy/{id}', 'DeseosController@destroy');
Route::get('/deseos/approve/{id}', 'DeseosController@approve');
Route::get('/deseos/finish/{id}', 'DeseosController@end');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
