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

$routes->get('login', 'Auth::index');
$routes->post('loginProses', 'Auth::login');
$routes->get('logout', 'Auth::logout');

$routes->get('home', 'Home::index');
$routes->addRedirect('/', 'home');


//CRUD cara biasa
$routes->get('gawe', 'Gawe::index');
$routes->get('gawe/add', 'Gawe::create');
$routes->post('gawe', 'Gawe::store');
$routes->get('gawe/edit/(:num)', 'Gawe::edit/$1');
$routes->put('gawe/(:any)', 'Gawe::update/$1');
$routes->delete('gawe/(:segment)', 'Gawe::destroy/$1');

//CRUD menggunakan Presenter Routes & ResourcePresenter
$routes->presenter('groups');
