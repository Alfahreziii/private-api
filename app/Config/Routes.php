<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {
    $routes->resource('mahasiswa', ['controller' => 'API\Mahasiswa']);
});

$routes->post('api/login', 'API\Auth::login');