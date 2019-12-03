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


Route::group(['prefix' => '/student'], function () {
    Route::get('/student-reports/{report}/{printpage?}', 'StudentReportController@viewPage')->name('student-reports');


    Route::resource('empty-palce', 'EmptyPalceController');

    Route::resource('/levels', 'LevelController');
    Route::get('levels/dataTables','LevelController@index')->name('levels.dataTables');
    Route::get('levels/delete/{id}', 'LevelController@destroy')->name('levels.delete');
    Route::get('/level/{id}/classrooms', 'LevelController@classrooms');
    Route::resource('/classrooms', 'ClassroomController');
    Route::get('classrooms/delete/{id}', 'ClassroomController@destroy')->name('classrooms.delete');
    Route::get('/classroom/{id}/parts', 'ClassroomController@parts');

    Route::resource('/parts', 'PartController');
    Route::get('parts/delete/{id}', 'PartController@destroy')->name('parts.delete');
    Route::resource('/students', 'StudentController');
    Route::get('students/dataTables','StudentController@studentDataTables')->name('students.dataTables');
    Route::get('students/fees/{id}', 'StudentController@fees')->name('students.fees');
    Route::get('students/delete/{id}', 'StudentController@destroy')->name('students.delete');
    Route::get('studentOnlyTrashed', 'StudentController@index')->name('studentOnlyTrashed.dataTables');
    Route::get('restore/{id}', 'StudentController@restoreStudent')->name('students.restore');
    Route::get('/report-not-complate-data', 'StudentController@reportNotComplateData')->name('report-not-complate-data');

    Route::any('/pay-registration', 'StudentController@payRegistration')->name('pay-registration');
    Route::resource('permissiontodepart', 'PermissiontodepartController');
    Route::get('permissiontodepart/delete/{id}', 'PermissiontodepartController@destroy')->name('permissiontodepart.delete');

    Route::any('/all', 'StudentController@allStudents')->name('all-students');

    Route::resource('/studentParent', 'StudentParentController');
    Route::get('studentParent/delete/{id}', 'StudentParentController@destroy')->name('studentParent.delete');
    Route::get('/add-student-manual', 'StudentController@addStudentManual')->name('add-student-manual');
    Route::patch('/students/dist', 'StudentController@dist');
    Route::resource('/healthes', 'HealthController');
    Route::get('/levels/classrooms/{level_id}', 'ClassroomController@getClassrooms');
    Route::get('/classrooms/parts/{classroom_id}', 'PartController@getParts');

    Route::get('/offprints/{type}', 'OffPrintController@getOffPrints')->name('offprints');
    Route::resource('offprints', 'OffPrintController');
    Route::get('offprints/dataTables','OffPrintController@index')->name('offprints.dataTables');

    Route::resource('student-transfers', 'StudentTransferController');
    Route::get('student-transfers/delete/{id}', 'StudentTransferController@destroy')->name('student-transfers.delete');

    /* offline */
    Route::resource('attendances', 'AttendanceController');
    Route::get('attendances-select', 'AttendanceController@attendancesSelect')->name('attendances.select');
    Route::get('attendance-for-class', 'AttendanceController@attendanceForClass')->name('attendance-for-class');
    Route::get('attendance-list', 'AttendanceController@list')->name('attendances.list');
    Route::get('attendance-list-show', 'AttendanceController@listShow')->name('attendances.list-show');

    Route::resource('student-pulls', 'StudentPullController');
    Route::get('student-pulls/delete/{id}', 'StudentPullController@destroy')->name('student-pulls.delete');


    Route::resource('report-separates', 'ReportSeparateController');
    Route::get('report-separates/delete/{id}', 'ReportSeparateController@destroy')->name('report-separates.delete');

    Route::resource('report-warnings', 'ReportWarningController');
    Route::get('report-warnings/delete/{id}', 'ReportWarningController@destroy')->name('report-warnings.delete');

    Route::resource('student-parents', 'StudentParentController');
    Route::get('student-parents/delete/{id}', 'StudentParentController@destroy')->name('student-parents.delete');
    Route::get('student-parents/edit-auth/{id}', 'StudentParentController@showEditAuthForm')->name('student-parents.edit-auth');
    Route::PATCH('student-parents/edit-auth/{id}', 'StudentParentController@saveEditAuth')->name('student-parents.edit-auth');


// employee routes //


});
