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

Route::prefix('finance')->group(function() {
    Route::get('/', 'FinanceController@index');

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

});
