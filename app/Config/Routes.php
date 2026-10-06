<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {

    $routes->get('/', 'Tasks::index');
    $routes->get('/tasks', 'Tasks::index');

    $routes->get('/tasks/new', 'Tasks::new');
    $routes->post('/tasks/create', 'Tasks::create');

    $routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
    $routes->post('/tasks/update/(:num)', 'Tasks::update/$1');

    $routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');
});