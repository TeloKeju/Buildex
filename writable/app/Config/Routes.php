<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->setAutoRoute(true);
$routes->get('detail/(:num)', 'Pages::detail/$1');
