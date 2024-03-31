<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'page::index');
$routes->get('/books/(:segment)', 'Books::detail/$1');