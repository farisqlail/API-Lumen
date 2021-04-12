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

// $router->get('/home', function () {
//     return view('welcome');
// });

$router->group(['prefix'=>'api/v1'], function() use($router){
    $router->get('/blogs', 'BlogController@index');
    $router->post('/blogs', 'BlogController@create');
    $router->get('/blogs{id}', 'BlogController@show');
    $router->put('/blogs{id}', 'BlogController@update');
    $router->delete('/blogs{id}', 'BlogController@destroy');
});
