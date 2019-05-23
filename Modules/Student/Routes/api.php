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
    // Route::get('levels', function () {

        // return factory('Modules\Student\Entities\Level', 10)->make();
        // return response()->json([
        //     [
        //       'name' => 'مرحلة رياض الاطفال',
        //       'sort' =>2,
        //       'head_master' =>'سمية ادم جبريل',
        //       'school_master' =>'محمد عثمان عب الله',
        //     ],
        //     [ 
        //       'name' => 'المرحلة الثانوية',
        //       'sort' =>1,
        //       'head_master' =>'محمد عثمان عب الله',
        //       'school_master' =>'سمية ادم جبريل',
        //     ],
        //   ]);
    // });
});
    //Route::resource('/Classroom', 'ClassroomController');
