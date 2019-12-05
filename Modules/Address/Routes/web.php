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

Route::prefix('address')->group(function() {
    Route::get('/', 'AddressController@index');
});




Route::prefix('cpanelAdmin')->group(function() {
    Route::group(['middleware' => ['web', 'auth:employee']], function(){
        Route::resource('addresses','AddressController');
        Route::get('addresses/delete/{id}', 'AddressController@destroy')->name('addresses.delete');

        Route::resource('contacts','ContactController');
        Route::get('contacts/delete/{id}', 'ContactController@destroy')->name('contacts.delete');

        Route::resource('identifcations','IdentifcationController');
        Route::get('identifcations/delete/{id}', 'IdentifcationController@destroy')->name('identifcations.delete');
    });


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