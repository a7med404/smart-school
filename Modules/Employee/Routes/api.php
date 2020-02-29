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

// Route::middleware('auth:api')->get('/employee', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    #TODO::change any to post method
    Route::any('/employee-login', 'API\EmployeeAuthController@login');

/*
| This group for all API Routes 'middleware' => 'auth'
*/
    // Route::group(['middleware' => 'auth:employee-api'], function () {
        Route::get('/employee-logout', 'API\EmployeeAuthController@logout');
    // });
});


// Route::group(['prefix' => '/employee'], function () {
//     Route::resource('employees', 'EmployeeController');
//     Route::resource('Certificates', 'CertificatController');
//     Route::resource('salaries', 'SalaryController');
//     /* offline works */
//     Route::resource('calends', 'AddCalendController');
//     Route::resource('add-calend', 'AddCalendEmployeeController');
//     Route::resource('setting-perissions', 'EmpPerissionNameController');
//     Route::resource('emp-perissions', 'EmpPerissionsController');
//     Route::resource('cutallowances', 'CutAllowanceController');
//     Route::resource('bearinminds', 'BearInMindController');
//     Route::resource('empabsences', 'EmpAbsenceController');
//     Route::resource('emppulls', 'EmpPullController');
//     Route::resource('managaments', 'ManagamentController');
//     Route::resource('departments', 'DepartmentController');
//     Route::resource('specialies', 'SpecialtyController');
//     Route::resource('addholidays', 'AddHolidayController');
//     Route::resource('formalholidays', 'FormalHolidayController');
//     Route::resource('empholidays', 'EmpHolidayController');
//     Route::resource('evaluationEmp', 'EvaluationEmpController');
//     Route::resource('evaluationItems', 'EvaluationItemController');
//     Route::resource('agreements', 'AgreementController');
//     Route::resource('rewardsPunition', 'RewardsPunitionController');
//     Route::resource('resignation', 'ResignationController');


//     /* reports Routes */
//     Route::get('emp-perissions-report', 'EmpPerissionsController@report');
// });
