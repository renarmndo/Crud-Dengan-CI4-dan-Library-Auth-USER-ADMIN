<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
// File: app/Config/Routes.php

$routes->get('user', 'User::index');
$routes->add('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->add('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->add('/admin/(:num)', 'Admin::Detail/$1', ['filter' => 'role:admin']);
// $routes->get('user/matakuliah', 'UserController::matakuliah');
// File: app/Config/Routes.php
$routes->get('matakuliah', 'Matakuliah::index');
$routes->get('profil', 'User::profil');
// $routes->get('matakuliah/detail/(:segment)', 'Matakuliah::detail/$1');
// File: \App\Config\Routes.php
// $routes->get('matakuliah/detail', 'Matakuliah::detail');
// Example route definition
$routes->get('matakuliah/detail/(:any)', 'Matakuliah::detail/$1');
$routes->get('matakuliah/create', 'Matakuliah::create');
$routes->post('matakuliah/save', 'Matakuliah::save', ['as' => 'matakuliah.save']);
$routes->get('matakuliah/save', 'Matakuliah::save', ['as' => 'matakuliah.save']);
$routes->delete('/matakuliah/(:num)', 'Matakuliah::delete/$1', ['as' => 'matakuliah.delete']);
$routes->get('matakuliah/edit/(:any)', 'Matakuliah::edit/$1', ['as' => 'matakuliah.edit']);
$routes->post('matakuliah/update/(:any)', 'Matakuliah::update/$1', ['as' => 'matakuliah.update']);








