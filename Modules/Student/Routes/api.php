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

Route::middleware('auth:api')->get('/student', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/student'], function () {

    Route::resource('/levels', 'LevelController');
    Route::get('/level/{id}/classrooms', 'LevelController@classrooms');
    Route::resource('/classrooms', 'ClassroomController');
    Route::get('/classroom/{id}/parts', 'ClassroomController@parts');
    Route::resource('/parts', 'PartController');
    Route::resource('/students', 'StudentController');
    Route::resource('/studentParent', 'StudentParentController');
    Route::patch('/students/dist', 'StudentController@dist');
    Route::resource('/healthes', 'HealthController');
    Route::get('/levels/classrooms/{level_id}', 'ClassroomController@getClassrooms');
    Route::get('/classrooms/parts/{classroom_id}', 'PartController@getParts');
    Route::resource('offPrints', 'OffPrintController');
    Route::resource('studentTransfers', 'StudentTransferController');
    
    /* offline */
    Route::resource('attendance', 'AttendanceController');
    Route::resource('studentPull', 'StudentPullController');
    Route::resource('discountSettingParent', 'DiscountSettingParentController');
    Route::resource('discountSettingSibling', 'DiscountSettingSiblingController');
    Route::resource('emptyPalce', 'EmptyPalceController');
    Route::resource('payClass', 'PayClassController');
    Route::resource('permissiontodepart', 'PermissiontodepartController');
    Route::resource('reportSeparate', 'ReportSeparateController');
    Route::resource('reportWarning', 'ReportWarningController');
    Route::resource('studentStudentParent', 'StudentStudentParentController');


});
