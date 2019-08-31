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

Route::prefix('education')->group(function() {
    Route::resource('subjects', 'SubjectController'); 
    Route::get('subjects/delete/{id}', 'SubjectController@destroy')->name('subjects.delete');
    
    Route::resource('timetables', 'TimetableController'); 
    Route::get('timetables/delete/{id}', 'TimetableController@destroy')->name('timetables.delete');
    
    Route::resource('evaluations', 'EvaluationController'); 
    Route::get('evaluations/delete/{id}', 'EvaluationController@destroy')->name('evaluations.delete');
    
    Route::resource('examinations', 'ExaminationController'); 
    Route::get('examinations/delete/{id}', 'ExaminationController@destroy')->name('examinations.delete');
});
