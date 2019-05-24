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

Route::middleware('auth:api')->get('/address', function (Request $request) {
    return $request->user();
});

Route::prefix('address')->group(function() {
    Route::get('/loacls/{id}', 'AddressController@getLocals');
});
Route::group(['prefix' => '/addresses'], function () {

    Route::resource('/address','AddressController');
    Route::resource('/Contacts','ContactController');
    Route::resource('/identifcation','IdentifcationController');

});
