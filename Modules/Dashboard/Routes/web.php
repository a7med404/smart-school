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

Config::set('auth.defines', 'employee');

Route::group(['middleware' => ['web', 'auth:employee']], function(){
  Route::get('/cpanel', 'DashboardController@index')->name('cpanel');       
});