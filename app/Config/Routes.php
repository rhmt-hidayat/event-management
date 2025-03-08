<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Buat database jalankan http://localhost:8080/create-db
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('event_ci4')) {
        echo 'Database created';
    }
});

$routes->get('home', 'Home::index');
$routes->addRedirect('/', 'home');
$routes->get('gawe', 'Gawe::index');
$routes->get('gawe/add', 'Gawe::create');
$routes->post('gawe', 'Gawe::store');
$routes->get('gawe/edit/(:any)', 'Gawe::edit/$1');
$routes->put('gawe/(:any)', 'Gawe::update/$1');
