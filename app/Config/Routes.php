<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');

$routes->get('/buku/pdf/(:segment)', 'Buku::pdf/$1'); // New route for PDF viewer
$routes->get('/', 'Pages::index');
$routes->get('/buku/create', 'Buku::create');
$routes->get('/buku/edit/(:any)', 'Buku::edit/$1');
$routes->post('/buku/update/(:segment)', 'Buku::update/$1');
$routes->post('buku/save', 'Buku::save');
$routes->delete('/buku/(:num)', 'Buku::delete/$1');
$routes->get('/buku/(:any)', 'Buku::detail/$1');
