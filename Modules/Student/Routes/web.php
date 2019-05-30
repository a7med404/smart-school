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

Route::prefix('student')->group(function() {
    Route::get('/', 'StudentController@index');    
});

Route::group(['prefix' => '/student'], function () {
    Route::get('/print-page/{page}', 'PrintController@printPage');
    Route::get('/print', 'PrintController@print')->name('print');
    Route::get('/download-PDF', 'PrintController@downloadPDF')->name('download-PDF');
    Route::get('/print-PDF', 'PrintController@printPDF')->name('print-PDF');
    
});