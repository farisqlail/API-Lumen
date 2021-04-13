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
    return 'Welcome';
});

$router->group(['prefix'=>'api/'], function() use($router){
    $router->get('/blogs', 'BlogController@index');
    $router->post('/blogs', 'BlogController@create');
    $router->get('/blogs/{id}', 'BlogController@show');
    $router->put('/blogs/{id}', 'BlogController@update');
    $router->delete('/blogs/{id}', 'BlogController@destroy');
});
