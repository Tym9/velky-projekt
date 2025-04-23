<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Karty::index');
$routes->get('komponenty', 'Karty::index');
$routes->get('typ/(:segment)', 'Karty::dleTypu/$1');
$routes->get('komponenta/(:num)', 'Informace::detail/$1');







