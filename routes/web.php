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

$router->get('/home', function () {
    return "desde home con return";
});
$router->post('/home', function () {
    return "desde home post";
});
$router->put('/update', function () {
    return "desde update";
});
$router->delete('/delete', function () {
    return "desde delete";
});
    

//AÑADIR PARAMETROS A LAS RUTAS - INTERPOLACIÓN DE VARIABLES
 
$router->get('/saludo/{nombre}', function ($nombre) {
    return "Saludos".$nombre;
});