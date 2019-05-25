<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/student', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/student'], function () {

    Route::resource('/levels', 'LevelController');
    Route::resource('/classrooms', 'ClassroomController');
    Route::resource('/parts', 'PartController');
    Route::resource('/students', 'StudentController');
    Route::resource('/healthes', 'HealthController');
    
    Route::get('/levels/classrooms/{level_id}', 'ClassroomController@getClassrooms');
    Route::get('/classrooms/parts/{classroom_id}', 'PartController@getParts');

});