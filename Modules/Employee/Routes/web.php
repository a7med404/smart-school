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

Route::prefix('employee')->group(function() {
    Route::get('/', 'EmployeeController@index');
});


Route::group(['prefix' => '/employee'], function () {
    Route::resource('calends', 'AddCalendController');
    // Route::resource('add-calend', 'AddCalendEmployeeController');
    // Route::resource('setting-perissions', 'EmpPerissionNameController');
    // Route::resource('emp-perissions', 'EmpPerissionsController');
    // Route::resource('cutallowances', 'CutAllowanceController');
    // Route::resource('bearinminds', 'BearInMindController');
    // Route::resource('empabsences', 'EmpAbsenceController');
    // Route::resource('emppulls', 'EmpPullController');
    // Route::resource('managaments', 'ManagamentController');
    // Route::resource('departments', 'DepartmentController');
    // Route::resource('specialies', 'SpecialtyController');
    // Route::resource('addholidays', 'AddHolidayController');
    // Route::resource('formalholidays', 'FormalHolidayController');
    // Route::resource('empholidays', 'EmpHolidayController');
    // Route::resource('evaluationEmp', 'EvaluationEmpController');
    // Route::resource('evaluationItems', 'EvaluationItemController');
    // Route::resource('agreements', 'AgreementController');
    // Route::resource('rewardsPunition', 'RewardsPunitionController');
    // Route::resource('resignation', 'ResignationController');
});

Route::group(['prefix' => '/employee'], function () {
    Route::resource('employees', 'EmployeeController');
    Route::resource('Certificates', 'CertificatController');
    Route::resource('salaries', 'SalaryController');
    Route::get('salary-details', 'SalaryController@salaryDetails')->name('salary-details');
    Route::get('realliance-salary', 'SalaryController@reallianceSalary')->name('realliance-salary');
    Route::get('overpayment', 'SalaryController@overpayment')->name('overpayment');
    Route::get('overpayment-division', 'SalaryController@overpaymentPivision')->name('overpayment-division');
    Route::resource('progenitors', 'ProgenitorController');
    
    
    /* offline works */
    Route::resource('calends', 'AddCalendController');
    Route::resource('add-calend', 'AddCalendEmployeeController');
    Route::resource('setting-perissions', 'EmpPerissionNameController');
    Route::resource('emp-perissions', 'EmpPerissionsController');
    Route::get('emp-setting-perissions', 'EmpPerissionsController@empSettingPerissions')->name('emp-setting-perissions');
    Route::resource('cut-allowances', 'CutAllowanceController');
    Route::resource('bear-in-minds', 'BearInMindController');
    Route::resource('bearinminds', 'BearInMindController');
    Route::resource('emp-absences', 'EmpAbsenceController');
    Route::resource('emp-pulls', 'EmpPullController');
    Route::resource('managaments', 'ManagamentController');
    Route::get('managaments/{id}/delete','ManagamentController@destroy')->name('managament.delete');

    Route::resource('departments', 'DepartmentController');
    Route::get('departments/{id}/delete', 'DepartmentController@destroy')->name('department.delete');
    Route::resource('specialies', 'SpecialtyController');
    Route::resource('add-holidays', 'AddHolidayController');
    Route::get('add-holidays/{id}/delete', 'AddHolidayController@destroy')->name('addholiday.delete');
    Route::resource('formalholidays', 'FormalHolidayController');
    Route::resource('emp-holidays', 'EmpHolidayController');
    Route::get('emp-holidays/{id}/delete','EmpHolidayController@destroy')->name('empholiday.delete');
    Route::resource('emp-evaluation', 'EvaluationEmpController');
    Route::get('emp-evaluation/{id}/delete','EvaluationEmpController@destroy')->name('emp-evaluation.delete');
    Route::resource('evaluation-items', 'EvaluationItemController');
    Route::get('evaluation-items/{id}/delete','EvaluationItemController@destroy')->name('evaluation-items.delete');

    Route::resource('agreements', 'AgreementController');
    Route::resource('rewards-punition', 'RewardsPunitionController');
    Route::resource('resignation', 'ResignationController');



    /* reports Routes */
    Route::get('emp-perissions-report', 'EmpPerissionsController@report');
    
    Route::get('/employee-reports/{report}', 'EmployeeReportController@viewPage')->name('employee-reports');
});