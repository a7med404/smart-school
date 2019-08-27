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

Route::prefix('setting')->group(function() {
    Route::get('/', 'SettingController@index');
});


Route::prefix('cpanel')->group(function() {
    Route::group(['middleware' => ['web', 'auth']], function(){
        Route::Resource('testimonials', 'TestimonialController');
        Route::get('testimonials/delete/{id}', 'TestimonialController@destroy')->name('testimonials.delete');

        Route::Resource('settings', 'SettingController');
        Route::get('/sitesetting', 'SettingController@index')->name('site-setting');
        Route::post('/sitesetting/update', 'SettingController@store')->name('site-setting-update');
        
    });


    

    // Route::group(['middleware' => 'customer:customer'], function () {

    //     Route::get('/profile', 'CustomerController@profile')->name('profile');
    //     Route::get('/customer/logout', 'AllCustomerController@logout')->name('all-customers-logout');

    // });

    
    // Route::middleware('role:superadministrator|administrator')->group(function () {

    //     /*
    //     |--------------------------------------------------------------------------
    //     | change sidesetting
    //     |--------------------------------------------------------------------------
    //     */
    //     Route::get('/sitesetting', 'SettingController@index')->name('site-setting');
    //     Route::post('/sitesetting/update', 'SettingController@store')->name('site-setting-update');
    
    
    
    
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