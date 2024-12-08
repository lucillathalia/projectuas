<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::index');
$routes->post('check_login', 'Auth::check');
$routes->get('logout', 'Auth::logout');
$routes->get('/SuratMasuk', 'SuratMasuk::index');
$routes->group('disposisi', function ($routes) {
    $routes->get('', 'Disposisi::index');
    $routes->add('tambah', 'Disposisi::tambah');
});
