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

    Route::resource('/levels', 'LevelController');
    Route::get('levels/delete/{id}', 'LevelController@destroy')->name('levels.delete');
    Route::get('/level/{id}/classrooms', 'LevelController@classrooms');
    Route::resource('/classrooms', 'ClassroomController');
    Route::get('classrooms/delete/{id}', 'ClassroomController@destroy')->name('classrooms.delete');
    Route::get('/classroom/{id}/parts', 'ClassroomController@parts');
    
    Route::resource('/parts', 'PartController');
    Route::get('parts/delete/{id}', 'PartController@destroy')->name('parts.delete');
    Route::resource('/students', 'StudentController');
    Route::get('students/delete/{id}', 'StudentController@destroy')->name('students.delete');
    Route::get('studentOnlyTrashed', 'StudentController@studentOnlyTrashed')->name('students.student-only-trashed');
    Route::get('restore/{id}', 'StudentController@restoreStudent')->name('students.restore');
    Route::get('/report-not-complate-data', 'StudentController@reportNotComplateData')->name('report-not-complate-data');
    
    
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

    Route::get('discounts', 'DiscountSettingParentController@discounts')->name('discounts');
    Route::get('discount-setting', 'DiscountSettingParentController@discountSetting')->name('discount-setting');
    Route::resource('discount-setting-parent', 'DiscountSettingParentController');
    Route::resource('discount-setting-sibling', 'DiscountSettingSiblingController');
    Route::resource('empty-palce', 'EmptyPalceController');

    Route::resource('pay-classes', 'PayClassController');
    Route::resource('pay_rules', 'PayRulsController');
    Route::get('pay-classes/delete/{id}', 'PayClassController@destroy')->name('pay-classes.delete');

    Route::resource('pay-rules', 'PayRulsController');
    Route::get('pay-rules/delete/{id}', 'PayRulsController@destroy')->name('pay-rules.delete');

    
    Route::resource('operations', 'OperationController');
    Route::get('operations/delete/{id}', 'OperationController@destroy')->name('operations.delete');
    Route::resource('transactions', 'TransactionController');
    Route::get('transactions/delete/{id}', 'TransactionController@destroy')->name('transactions.delete');
    Route::resource('rsc-types', 'RscTypeController');
    Route::get('rsc-types/delete/{id}', 'RscTypeController@destroy')->name('rsc-types.delete');
    Route::any('/pay-registration', 'StudentController@payRegistration')->name('pay-registration');
    Route::resource('permissiontodepart', 'PermissiontodepartController');
    Route::get('permissiontodepart/delete/{id}', 'PermissiontodepartController@destroy')->name('permissiontodepart.delete');

    Route::resource('report-separates', 'ReportSeparateController');
    Route::get('report-separates/delete/{id}', 'ReportSeparateController@destroy')->name('report-separates.delete');

    Route::resource('report-warnings', 'ReportWarningController');
    Route::get('report-warnings/delete/{id}', 'ReportWarningController@destroy')->name('report-warnings.delete');

    Route::resource('student-parents', 'StudentParentController');
    Route::get('student-parents/delete/{id}', 'StudentParentController@destroy')->name('student-parents.delete');


// employee routes //


});
