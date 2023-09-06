<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('hello', 'Hello::index');
$routes->get('customer', 'Customer::index');
$routes->get('customer/add_new', 'Customer::add_new');
