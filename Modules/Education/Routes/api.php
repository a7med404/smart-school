<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/education', function (Request $request) {
    return $request->user();
});

Route::prefix('education')->namespace('API')->group(function() {
    Route::get('subjects/{student_id}', 'SubjectController@getSubject');
    
    Route::get('timetables/{student_id}', 'TimetableController@getTimetable');

    Route::get('evaluations/{student_id}', 'EvaluationController@getEvaluation');

    Route::get('examinations/{student_id}', 'ExaminationController@getExamination');
});
