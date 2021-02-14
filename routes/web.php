<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return response()
        ->json(
            ['message' => 'Hello World!'], 
            200, 
            ['Content-Type: application/json']);
});

$router->group(['prefix' => '/v1/public'], function() use ($router) {
    $router->get('/characters', 
        ['as' => 'characters', 'uses' => 'CharactersController@index']);

    $router->get('/characters/{id}/comics', 
        ['as' => 'characters', 'uses' => 'CharactersController@showComics']);
});
