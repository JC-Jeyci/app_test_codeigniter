<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes Principal
 */
$routes->get('/', 'Home::index');

/**
 * @var RouteCollection $routes Unidades
 */
$routes->get('unidades', 'Unidades::index');
$routes->get('unidades/nuevo', 'Unidades::nuevo');
$routes->post('unidades/insert', 'Unidades::insert');
$routes->get('unidades/update/(:num)', 'Unidades::update/$1');
$routes->post('unidades/actualizar', 'Unidades::actualizar');
$routes->get('unidades/delete/(:num)', 'Unidades::delete/$1');
$routes->get('unidades/eliminados', 'Unidades::eliminados');
$routes->get('unidades/reingresar/(:num)', 'Unidades::reingresar/$1');


/**
 * @var RouteCollection $routes Categorias
 */
$routes->get('categorias', 'Categorias::index');
$routes->get('categorias/nuevo', 'Categorias::nuevo');
$routes->post('categorias/insert', 'Categorias::insert');
$routes->get('categorias/update/(:num)', 'Categorias::update/$1');
$routes->post('categorias/actualizar', 'Categorias::actualizar');
$routes->get('categorias/delete/(:num)', 'Categorias::delete/$1');
$routes->get('categorias/eliminados', 'Categorias::eliminados');
$routes->get('categorias/reingresar/(:num)', 'Categorias::reingresar/$1');


/**
 * @var RouteCollection $routes Ejemplos
 */
$routes->get('test', 'Test::index');
