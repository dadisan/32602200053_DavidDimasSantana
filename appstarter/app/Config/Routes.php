<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/save', 'Home::save');

$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/form', 'Form::index');
$routes->match(['post'], '/form-submit', 'FormController::submit');

$routes->get('/layout', 'Layout::index');

$routes->get('/profile', 'Halaman::profile');
$routes->get('/experience', 'Halaman::experience');

$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');
