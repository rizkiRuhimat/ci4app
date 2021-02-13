<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/komik/create', 'komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/(:num)', 'komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');

$routes->get('/agenda/create', 'agenda::create');
$routes->get('/agenda/edit/(:segment)', 'agenda::edit/$1');
$routes->delete('/agenda/(:num)', 'agenda::delete/$1');
$routes->get('/agenda/(:any)', 'agenda::detail/$1');

$routes->get('/pic/create', 'pic::create');
$routes->get('/pic/edit/(:segment)', 'pic::edit/$1');
$routes->delete('/pic/(:num)', 'pic::delete/$1');
$routes->get('/pic/(:any)', 'pic::detail/$1');

$routes->get('/sandeza/create', 'sandeza::create');
$routes->get('/sandeza/edit/(:segment)', 'sandeza::edit/$1');
$routes->delete('/sandeza/(:num)', 'sandeza::delete/$1');
$routes->get('/sandeza/list/(:any)', 'sandeza::list/$1');
$routes->get('/sandeza/(:any)', 'sandeza::detail/$1');

// $routes->get('/sandeza/create', 'sandeza::create');
// $routes->get('/sandeza/edit/(:segment)', 'sandeza::edit/$1');
// $routes->delete('/sandeza/(:num)', 'sandeza::delete/$1');
// $routes->get('/corporate/list/(:any)', 'corporate::list/$1');
$routes->get('/corporate/(:segment)', 'corporate::detail/$1');

$routes->get('/division/create', 'division::create');
$routes->get('/division/edit/(:segment)', 'division::edit/$1');
$routes->delete('/division/(:num)', 'division::delete/$1');
$routes->get('/division/list/(:any)', 'division::list/$1');
$routes->get('/division/(:any)', 'division::detail/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}