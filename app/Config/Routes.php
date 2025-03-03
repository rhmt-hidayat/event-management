<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('home', 'Home::index');
$routes->addRedirect('/', 'home');
$routes->get('gawe', 'Gawe::index');
