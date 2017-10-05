<?php

use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Application Frontend Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a given Closure or controller and enjoy the fresh air.
|
*/

$router->middleware('web')
    ->group(function (Router $router) {
        $router->get('/', 'WelcomeController@index');
        $router->get('home', 'HomeController@index');
    });
