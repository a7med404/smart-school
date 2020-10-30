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

    Route::resource('pay-classes', 'PayClassController');
    Route::resource('pay_rules', 'PayRulsController');
    Route::get('pay-classes/delete/{id}', 'PayClassController@destroy')->name('pay-classes.delete');

    Route::get('pay-classes-dataTables', 'PayClassController@paydataTable')->name('pay-classes.dataTables');

    Route::resource('pay-rules', 'PayRulsController');
    Route::get('pay-rules-dataTables', 'PayRulsController@RulsDataTables')->name('pay-rules.dataTables');
    Route::get('pay-rules/delete/{id}', 'PayRulsController@destroy')->name('pay-rules.delete');


    Route::get('operations/show-transactions', 'OperationController@showTransactions')->name('show-transactions');
    Route::resource('operations', 'OperationController');
    Route::get('operations/delete/{id}', 'OperationController@destroy')->name('operations.delete');

    Route::resource('rsc-types', 'RscTypeController');
    Route::get('/rsctypes-dataTables', 'RscTypeController@RscTables')->name('rsc-types.dataTables');
    Route::get('rsc-types/delete/{id}', 'RscTypeController@destroy')->name('rsc-types.delete');

});
