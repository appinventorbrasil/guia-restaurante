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

Route::group(['prefix'=>'restaurants'], function(){
    Route::get('/', 'API\RestaurantController@index');
    Route::get('/{id}', 'API\RestaurantController@show');
    Route::get('/{id}/comments', 'API\RestaurantController@listComments');
    Route::post('/comments', 'API\RestaurantController@storeComments');
});

Route::group(['prefix' => 'users'], function () {
    Route::post('', 'API\UserController@store');
    Route::post('/login', 'API\UserController@login');
});