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


Route::post('/login', 'Api\Auth\LoginController@login');
Route::middleware('auth:api')->post('/logout', 'Api\Auth\LoginController@logout');

Route::post('/register', 'Api\Auth\RegisterController@register');
