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
     * 
     * @param interge id (obrigatorio) identificador do restaurante
     */
    Route::get('/{id}/comments', 'API\RestaurantController@listComments');

    /**
     * Faz um comentario em um estabelecimento
     * 
     * @param interge user_id (obrigatorio) => Identificador do usuario que esta comentando
     * @param interge restaurant_id (obrigatorio) => Identificador do restaurante
     * @param String description (opicional) => Comentario
     * @param decimal evaluation (obrigatorio) => Avaliacao
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