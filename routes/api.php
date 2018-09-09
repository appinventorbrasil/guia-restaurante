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
    /**
     * Retorna todos os estabelecimentos cadastrados
     */
    Route::get('/', 'API\RestaurantController@index');

    /**
     * Mostra apenas um estabelecimento especifico
     */
    Route::get('/{id}', 'API\RestaurantController@show');

    /**
     * Lista todos os comentarios de um estabelecimento
     * @param int id identificador do restaurante
     */
    Route::get('/{id}/comments', 'API\RestaurantController@listComments');

    /**
     * Faz um comentario em um estabelecimento
     */
    Route::post('/comments', 'API\RestaurantController@storeComments');
});

Route::group(['prefix' => 'users'], function () {
    /**
     * Salva um novo usuario
     */
    Route::post('', 'API\UserController@store');

    /**
     * Faz a validacao de login do usuario
     */
    Route::post('/login', 'API\UserController@login');
});