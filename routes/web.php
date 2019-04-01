<?php

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
// HOME
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// USER
$router->get('user', function() {
    return 'Hello User';
});

$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->put('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->delete('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->post('user/{id}', function ($id) {
    return 'User '.$id;
});

//ADMIN

$router->get('admin', function() {
    return 'Hello Admin';
});

$router->get('admin/{id}', function ($id) {
    return 'Admin '.$id;
});

$router->put('admin/{id}', function ($id) {
    return 'Admin '.$id;
});

$router->delete('admin/{id}', function ($id) {
    return 'Admin '.$id;
});

// EVENT

$router->get('event', function() {
    return 'Hello Event';
});

$router->get('event/{id}', function ($id) {
    return 'Event '.$id;
});

$router->put('event/{id}', function ($id) {
    return 'Event '.$id;
});

$router->delete('event/{id}', function ($id) {
    return 'Event '.$id;
});


