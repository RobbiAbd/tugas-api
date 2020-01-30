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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_all_students','StudentApiController@index');
Route::post('create_student','StudentApiController@store');
Route::put('edit_student/{id}','StudentApiController@update');
Route::delete('delete_student/{id}','StudentApiController@destroy');
Route::get('get_student/{id}','StudentApiController@show');
