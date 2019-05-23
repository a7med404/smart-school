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

// Route::get('/', function () {
//     return view('app');
// });
Route::get('/view/{any}', 'SpaController@index')->where('any', '.*');

  // #this for vue-router
  // Route::get('/{any?}', function(){
  //   return view('welcome');
  // })->where('any', '([A-z\d-\/_.]+)?');