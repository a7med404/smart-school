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
    Route::get('employees/delete/{id}', 'EmployeeController@destroy')->name('employees.destroy');
    Route::get('employees-dataTable', 'EmployeeController@empTable')->name('employees.dataTables');


    Route::resource('employees', 'EmployeeController');
    Route::get('employees/delete/{id}', 'EmployeeController@destroy')->name('employees.delete');
    Route::get('employeeOnlyTrashed', 'EmployeeController@employeeOnlyTrashed')->name('employees.employee-only-trashed');
    Route::post('trashedestroy', 'EmployeeController@Trashedestroy')->name('employees.trashedestroy');
    Route::get('restore/{id}', 'EmployeeController@restoreEmployee')->name('employees.restore');
    Route::get('employees/edit-auth/{id}', 'EmployeeController@showEditAuthForm')->name('employees.edit-auth');
    Route::PATCH('employees/edit-auth/{id}', 'EmployeeController@saveEditAuth')->name('employees.edit-auth');


    Route::resource('certificates', 'CertificatController');
    Route::get('certificates/delete/{id}', 'CertificatController@destroy')->name('certificates.delete');

    Route::resource('salaries', 'SalaryController');
    Route::get('salary-details', 'SalaryController@salaryDetails')->name('salary-details');
    Route::get('realliance-salary', 'SalaryController@reallianceSalary')->name('realliance-salary');
    Route::get('overpayment', 'SalaryController@overpayment')->name('overpayment');
    Route::get('overpayment-division', 'SalaryController@overpaymentPivision')->name('overpayment-division');
    Route::resource('progenitors', 'ProgenitorController');
    Route::get('progenitors/{id}/delete', [
        'uses' => 'ProgenitorController@destroy',
        'as' => 'progenitors.delete'
        ]);
    Route::get('progenitros-datatable','ProgenitorController@progenitorsDataTable')->name('progenitors.dataTable');


    Route::resource('bearinminds', 'BearInMindController');
    Route::get('bearinminds/delete/{id}', 'BearInMindController@destroy')->name('bearinminds.delete');

    /* offline works */
    Route::resource('calends', 'CalendController');
    Route::get('calends-dataTables','CalendController@CalendTables')->name('calends.dataTables');
    Route::get('calends/delete/{id}', 'CalendController@destroy')->name('calends.delete');

    /* offline works */
    Route::resource('add-calends-emp', 'AddCalendEmployeeController');
    Route::get('add-calends-emp-dataTables','AddCalendEmployeeController@CalendTables')->name('add-calends-emp.dataTables');
    Route::get('add-calends-emp/delete/{id}', 'AddCalendEmployeeController@destroy')->name('add-calends-emp.delete');


    // Route::resource('add-calend', 'AddCalendEmployeeController');
    Route::resource('setting-perissions', 'EmpPerissionNameController');
    Route::resource('emp-perissions', 'EmpPerissionsController');
    Route::get('emp-perissions-dataTable', 'EmpPerissionsController@EmpPerissions')->name('emp-perissions.dataTable');
    Route::get('emp-setting-perissions', 'EmpPerissionsController@empSettingPerissions')->name('emp-setting-perissions');
    Route::resource('cut-allowances', 'CutAllowanceController');
    Route::get('cut-allowances-dataTables', 'CutAllowanceController@CutTable')->name('cut-allowances-dataTables');

    Route::get('cut-allowances/delete/{id}', 'CutAllowanceController@destroy')->name('cut-allowances.delete');

    Route::resource('bear-in-minds', 'BearInMindController');
    Route::get('bearinminds-datatables', 'BearInMindController@bearinminds')->name('bearinminds.dataTable');

    Route::resource('bearinminds', 'BearInMindController');
    Route::resource('emp-absences', 'EmpAbsenceController');
    Route::get('emp-absences/delete/{id}', 'EmpAbsenceController@destroy')->name('emp-absences.delete');
    Route::get('emp-absences-dataTables','EmpAbsenceController@empdataTable')->name('emp-absences.dataTable');
    Route::resource('emp-pulls', 'EmpPullController');
    Route::resource('managaments', 'ManagamentController');
    Route::get('managaments/{id}/delete','ManagamentController@destroy')->name('managament.delete');
    Route::get('managaments-dataTable','ManagamentController@ManagamentTables')->name('managaments.dataTable');


    Route::resource('departments', 'DepartmentController');
    Route::get('departments/{id}/delete', 'DepartmentController@destroy')->name('department.delete');
    Route::resource('specialies', 'SpecialtyController');
    Route::resource('add-holidays', 'AddHolidayController');
    Route::get('add-holidays/{id}/delete', 'AddHolidayController@destroy')->name('addholiday.delete');
    Route::resource('formalholidays', 'FormalHolidayController');
    Route::resource('emp-holidays', 'EmpHolidayController');
  Route::get('emp-holidays-dataTable', 'EmpHolidayController@EmpTable')->name('emp-holidays.dataTable');


    Route::get('emp-holidays/{id}/delete','EmpHolidayController@destroy')->name('emp-holidays.delete');
    Route::resource('emp-evaluation', 'EvaluationEmpController');
    Route::get('emp-evaluation/{id}/delete','EvaluationEmpController@destroy')->name('emp-evaluation.delete');
    Route::get('emp-evaluation-dataTable', 'EvaluationEmpController@EmpEvalu')->name('emp-evaluation.dataTable');



    Route::resource('evaluation-items', 'EvaluationItemController');
    Route::get('evaluation-items/{id}/delete','EvaluationItemController@destroy')->name('evaluation-items.delete');
    Route::post('evaluation-item','EvaluationItemController@store')->name('evaluation-item.store');
    Route::get('evaluation-item-dataTable','EvaluationItemController@EvaluationDataTables')->name('evaluation-items.datatable');



    Route::resource('agreements', 'AgreementController');
    
    Route::resource('rewards-punition', 'RewardsPunitionController');
    Route::get('rewards-punition/{id}/delete',[
        'uses' => 'RewardsPunitionController@destroy',
        'as' => 'rewards-punition.delete'
    ]);
    Route::get('rewards-punition-datatable','RewardsPunitionController@rewardsDataTable')->name('rewards-punition.datatable');
    Route::resource('resignation', 'ResignationController');



    /* reports Routes */
    Route::get('emp-perissions-report', 'EmpPerissionsController@report');

    Route::get('/employee-reports/{report}', 'EmployeeReportController@viewPage')->name('employee-reports');
    Route::get('/ReportPermission', 'EmployeeReportController@Permission')->name('ReportPermission');
    Route::get('/report-rewards-punition', 'EmployeeReportController@Punition')->name('report-rewards-punition');
    Route::get('/employee-search', 'EmployeeReportController@employesearch')->name('employee-search');
    Route::get('/report-absence', 'EmployeeReportController@ReportAbsence')->name('ReportAbsence');
    Route::get('/report-evaluation', 'EmployeeReportController@evaluation')->name('report-evaluation');
    Route::get('/report-salary', 'EmployeeReportController@salary')->name('report-salary');
    Route::get('/report-progenitor', 'EmployeeReportController@progenitor')->name('report-progenitor');






});



Route::group(['middleware' => 'guest:employee'], function () {
    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login');
});




// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::prefix('cpanelAdmin')->group(function() {
    Route::group(['middleware' => ['web', 'auth:employee']], function(){
        /**
         * Users Routes  ==================================================================================>
         */

        Route::any('logout', 'AuthController@logout')->name('logout')->middleware('auth:employee');
        // Route::resource('users','UserController');
        // # change-password For User
        // Route::get('users/{user}/change-password', 'UserController@changePassword')->name('change-password');
        // Route::patch('users/{user}/update-password', 'UserController@updatePassword')->name('update-password');
        // Route::get('users/delete/{id}', 'UserController@destroy')->name('users.delete');
        // #change level For Users
        // Route::get('users/{user}/editLevel', 'UserController@editLevel')->name('users.editLevel');


    });



        /*
        |--------------------------------------------------------------------------
        | Resource For Roles
        |--------------------------------------------------------------------------
        */
        Route::Resource('roles', 'RoleController');
        Route::get('roles/delete/{id}', 'RoleController@destroy')->name('roles.delete');
        Route::get('RoleDataTable', 'RoleController@RoleDataTables')->name('roles.dataTables');

        Route::Resource('permissions', 'PermissionController');
        Route::get('permissions-datatable', 'PermissionController@PermissionDataTable')->name('permissions.datatable');
        Route::get('permissions/delete/{id}', 'PermissionController@destroy')->name('permissions.delete');


    // /*
    // |--------------------------------------------------------------------------
    // | Need Owner Roles
    // |--------------------------------------------------------------------------
    // */
    Route::middleware('role:superadministrator|administrator')->group(function () {

    });


    // /*
    // |--------------------------------------------------------------------------
    // | Need ... Roles
    // |--------------------------------------------------------------------------
    // */
    // Route::middleware('role:superadministrator|administrator')->group(function () {

    // });



    // /*
    // |--------------------------------------------------------------------------
    // | Need ... Roles
    // |--------------------------------------------------------------------------
    // */
    // Route::middleware('role:superadministrator|administrator')->group(function () {

    // });


    // /*
    // |--------------------------------------------------------------------------
    // | Need ... Roles
    // |--------------------------------------------------------------------------
    // */
    // Route::middleware('role:superadministrator|administrator')->group(function () {

    // });




    // Route::middleware('role:superadministrator|administrator')->group(function () {

    //     /*
    //     |--------------------------------------------------------------------------
    //     | change sidesetting
    //     |--------------------------------------------------------------------------
    //     */
    //     Route::get('/sitesetting', 'SiteSettingController@index')->name('site-setting');
    //     Route::post('/sitesetting/update', 'SiteSettingController@store')->name('site-setting-update');




    //     /*
    //     |--------------------------------------------------------------------------
    //     | Resource For Roles
    //     |--------------------------------------------------------------------------
    //     */
    //     Route::Resource('roles', 'RoleController');
    //     Route::get('roles/delete/{id}', 'RoleController@destroy')->name('roles.delete');




    //     /*
    //     |--------------------------------------------------------------------------
    //     | Resource For Permissions
    //     |--------------------------------------------------------------------------
    //     */
    //     Route::Resource('permissions', 'PermissionController');
    //     Route::get('permissions/delete/{id}', 'PermissionController@destroy')->name('permissions.delete');

    //   });


});
