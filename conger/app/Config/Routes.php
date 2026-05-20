<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/(:num)', 'Dashboard::profile/$1');
$routes->get('/emp', 'EmployeController::index');
