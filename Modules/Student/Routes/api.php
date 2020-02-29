<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/student', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    #TODO::change any to post method
    Route::any('/parent-login', 'API\StudentAuthController@login');

/*
| This group for all API Routes 'middleware' => 'auth'
*/
    // Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/parent-logout', 'API\StudentAuthController@logout');
    // });
});


Route::prefix('student')->namespace('API')->group(function() {
    Route::get('attendances/{student_id}/{month}', 'AttendanceController@getAttendance');
});


Route::group(['prefix' => '/student'], function () {

    // Route::resource('/levels', 'LevelController');
    // Route::get('/level/{id}/classrooms', 'LevelController@classrooms');
    // Route::resource('/classrooms', 'ClassroomController');
    // Route::get('/classroom/{id}/parts', 'ClassroomController@parts');
    // Route::resource('/parts', 'PartController');

    // Route::resource('/students', 'StudentController');
    // Route::any('/all', 'StudentController@allStudents');
    // Route::resource('/studentParent', 'StudentParentController');
    // Route::patch('/students/dist', 'StudentController@dist');
    // Route::resource('/healthes', 'HealthController');
    // Route::get('/levels/classrooms/{level_id}', 'ClassroomController@getClassrooms');
    // Route::get('/classrooms/parts/{classroom_id}', 'PartController@getParts');
    // Route::get('/offprints/{type}', 'OffPrintController@getOffPrints');
    // Route::resource('offprints', 'OffPrintController');
    // Route::resource('studentTransfers', 'StudentTransferController');

    // /* offline */
    // Route::resource('attendance', 'AttendanceController');
    // Route::resource('studentPull', 'StudentPullController');
    // // Route::resource('discountSettingParent', 'DiscountSettingParentController');
    // // Route::resource('discountSettingSibling', 'DiscountSettingSiblingController');
    // Route::resource('emptyPalce', 'EmptyPalceController');
    // Route::resource('payClass', 'PayClassController');
    // Route::resource('pay_rules', 'PayRulsController');
    // Route::resource('permissiontodepart', 'PermissiontodepartController');
    // Route::resource('reportSeparate', 'ReportSeparateController');
    // Route::resource('reportWarning', 'ReportWarningController');
    // Route::resource('studentStudentParent', 'StudentStudentParentController');


});
