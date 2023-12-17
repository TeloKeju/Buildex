<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->setAutoRoute(true);
$routes->get('detail/(:num)', 'Pages::detail/$1');
$routes->post('login/logout', 'Login::logout');
$routes->get('login/logout', 'Login::logout');
$routes->get('pages/detailpesanan/(:num)', 'Pages::detailpesanan/$1');
