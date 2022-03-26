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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/listar-todos', 'UsuarioController@index');
$router->post('/listar', 'UsuarioController@show');
$router->post('/cadastrar', 'UsuarioController@create');
$router->get('/cadastrar', 'UsuarioController@form');
$router->post('/alterar/{id}', 'UsuarioController@update');
$router->get('/alterar/{id}', 'UsuarioController@edit');
$router->get('/deletar/{id}', 'UsuarioController@delete');
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
