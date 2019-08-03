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
    // Route::resource('calends', 'AddCalendController');
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
    Route::get('calends/delete/{id}', 'AddCalendController@destroy')->name('calends.delete');

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
    Route::resource('departments', 'DepartmentController');
    Route::resource('specialies', 'SpecialtyController');
    Route::resource('add-holidays', 'AddHolidayController');
    Route::resource('formalholidays', 'FormalHolidayController');
    Route::resource('emp-holidays', 'EmpHolidayController');
    Route::resource('emp-evaluation', 'EvaluationEmpController');
    Route::resource('evaluation-items', 'EvaluationItemController');
    Route::resource('agreements', 'AgreementController');
    Route::resource('rewards-punition', 'RewardsPunitionController');
    Route::resource('resignation', 'ResignationController');



    /* reports Routes */
    Route::get('emp-perissions-report', 'EmpPerissionsController@report');
    
    Route::get('/employee-reports/{report}', 'EmployeeReportController@viewPage')->name('employee-reports');
});