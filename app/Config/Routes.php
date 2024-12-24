<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart.html', 'Home::chart');
$routes->get('/chart.php', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

service('auth')->routes($routes);
$routes->post('/submit', 'Home::submit');

// Admin routes with middleware for authorization
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    
    $routes->group('daftar-buku', function ($routes) {
        $routes->get('/', 'AdminController::daftarbuku');
        $routes->get('tambah', 'AdminController::daftarbukuTambah');
        $routes->post('tambah', 'AdminController::createBuku');
        $routes->get('edit/(:num)', 'AdminController::daftarbukuEdit/$1'); // Add ID parameter
        $routes->post('edit/(:num)', 'AdminController::updateBuku/$1');
        $routes->delete('hapus/(:num)', 'AdminController::daftarbukuHapus/$1'); // Use DELETE
    });

    $routes->group('admin', ['filter' => 'auth'], function($routes) {
        $routes->get('', 'AdminController::index');
    });

    $routes->get('admin', 'AdminController::index', ['filter' => 'auth']);

    $routes->group('transaksi', function ($routes) {
        $routes->get('/', 'AdminController::transaksi');
        $routes->post('ubah-status/(:num)', 'AdminController::transaksiUbahStatus/$1'); // Use POST
        $routes->delete('hapus/(:num)', 'AdminController::transaksiHapus/$1'); // Use DELETE
    });

    $routes->group('pelanggan', function ($routes) {
        $routes->get('/', 'AdminController::pelanggan');
        $routes->delete('hapus/(:num)', 'AdminController::pelangganHapus/$1'); // Use DELETE
    });

    $routes->get('file-image/(:segment)/(:segment)', 'AdminController::image/$1/$2');
});
