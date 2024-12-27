<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Login');
$routes->post('login/autentikasi', 'Login::autentikasi');
$routes->get('/logout', 'Auth::logout');

$routes->get('/', 'AdminController::user');
$routes->get('/admin', 'AdminController::admin');
$routes->get('/pengadaan', 'AdminController::pengadaan');
$routes->get('/pengadaan/print', 'AdminController::printPengadaan'); 

$routes->get('admin/updateBook/(:segment)', 'AdminController::update/$1');
$routes->get('admin/deleteBook/(:segment)', 'AdminController::deleteBook/$1');

$routes->match(['get', 'post'], 'search', 'AdminController::search');

service('auth')->routes($routes);

$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('addBook', 'AdminController::add');
    $routes->post('addBook', 'AdminController::addBook');
    $routes->post('updateBook/(:segment)', 'AdminController::updateBook/$1');

});


