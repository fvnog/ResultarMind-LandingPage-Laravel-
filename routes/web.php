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

Route::get('/', 'MainController@index');
Route::get('/designgrafico', 'DesignGraficoController@index')->name('designgrafico');
Route::get('/automacao', 'AutomacaoController@index')->name('automacao');
Route::get('/website', 'WebsiteController@index')->name('website');
Route::get('/gestao', 'GestaoController@index')->name('gestao');
