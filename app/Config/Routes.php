<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');
$routes->post('/', 'DashboardController::tambahEntry');
$routes->get('departour', 'StationController::departour');
$routes->get('arrived', 'StationController::arrived');
$routes->get('delivery', 'StationController::delivery');
$routes->get('poddex', 'StationController::poddex');


$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');


$routes->group('api', ['namespace' => 'App\Controllers\API'], function ($routes) {
    $routes->get('barang', 'BarangController::index'); // Get all Barang
    $routes->post('departour/update-status/(:num)', 'BarangController::updateStatusDepartour/$1');
    $routes->post('arrived/update-status/(:num)', 'BarangController::updateStatusArrived/$1');
    $routes->post('delivery/update-status/(:num)', 'BarangController::updateStatusDeliveryByCour/$1');
    $routes->post('poddex/update-status/(:num)/(:any)/(:any)', 'BarangController::updateStatusPoddex/$1/$2/$3');
});
