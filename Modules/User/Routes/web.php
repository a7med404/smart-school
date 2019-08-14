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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::prefix('cpanel')->group(function() {
    Route::group(['middleware' => ['web', 'auth']], function(){
        /**
         * Users Routes  ==================================================================================>
         */

        Route::any('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');
        Route::resource('users','UserController');
        # change-password For User
        Route::get('users/{user}/change-password', 'UserController@changePassword')->name('change-password');
        Route::patch('users/{user}/update-password', 'UserController@updatePassword')->name('update-password');
        Route::get('users/delete/{id}', 'UserController@destroy')->name('users.delete');
        #change level For Users
        Route::get('users/{user}/editLevel', 'UserController@editLevel')->name('users.editLevel');


    });



        /*
        |--------------------------------------------------------------------------
        | Resource For Roles
        |--------------------------------------------------------------------------
        */
        Route::Resource('roles', 'RoleController');
        Route::get('roles/delete/{id}', 'RoleController@destroy')->name('roles.delete');

        Route::Resource('permissions', 'PermissionController');
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
