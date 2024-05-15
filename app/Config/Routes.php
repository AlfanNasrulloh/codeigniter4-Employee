<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('test_view', 'Test_view::index');
// $routes->get('/employees', 'Employee::index');

$routes->get('/', 'Home::index');
$routes->get('/test_view', 'Test_view::index');
$routes->get('/employee', 'Employee::index');
$routes->post('/employee/add', 'Employee::add');
$routes->get('/employee/edit/(:any)', 'Employee::edit/$1');
$routes->post('/employee/update/', 'Employee::update/$1');
$routes->get('/employee/hapus/(:any)', 'Employee::hapus/$1');
$routes->post('/employee/hapus/', 'Employee::hapus/$1');