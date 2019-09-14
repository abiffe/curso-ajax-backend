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

Route::post('login', 'API\UserController@login');
Route::get('users', 'API\UserController@users');
Route::post('register', 'API\UserController@register');
Route::middleware('auth:api')->group(function(){
    Route::post('details', 'API\UserController@details');
    Route::post('logout', 'API\UserController@logout');
    Route::post('delete', 'API\UserController@delete');
});
