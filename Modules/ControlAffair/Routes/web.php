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

Route::prefix('controlaffair')->group(function() {
    Route::get('/', 'ControlAffairController@index');
});

Route::resource('Semester', 'SemesterController');
Route::resource('degree', 'DegreeController');
Route::get('SemesterOne','SemesterController@SemesterDataTables')->name('Semester.dataTable');
Route::resource('estimate', 'EstimateController');
Route::get('estimate-datatTable','EstimateController@EstimateDataTables')->name('Estimate.dataTable');
