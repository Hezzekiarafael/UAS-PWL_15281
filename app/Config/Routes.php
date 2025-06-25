<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');


$routes->get('/', 'Home::index');

// Route untuk Admin
$routes->get('admin', 'AdminController::index',['filter' => 'auth']);


$routes->get('/allProduk', 'allProdukController::index',['filter' => 'auth']);


$routes->group('produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download','ProdukController::download');
});

$routes->group('cart', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransactionController::index');
    $routes->post('', 'TransactionController::cart_add');
    $routes->post('edit', 'TransactionController::cart_edit');
    $routes->get('delete/(:any)', 'TransactionController::cart_delete/$1');
    $routes->get('clear', 'TransactionController::cart_clear');
});

$routes->get('checkout', 'TransactionController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'TransactionController::buy', ['filter' => 'auth']);

// untuk mengakses dua endpoint sesuai yang dicoba menggunakan postman
$routes->get('get-location', 'TransactionController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'TransactionController::getCost', ['filter' => 'auth']);