<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/register', 'RegisterController::index');
$routes->post('/agregarUser', 'RegisterController::agregarUser');
$routes->post('/inicio', 'LoginController::inicio');
$routes->get('/addapartment', 'AddapartmentController::index');
$routes->get('/perfil', 'PerfilController::index');
$routes->get('/apartmentowner', 'ApartmentownerController::index');
$routes->post('/agregarUsuario', 'LoginController::agregarUsuario');
$routes->get('/addapartment/login', 'AddapartmentController::registrarApt');
$routes->post('/addApt', 'AddapartmentController::agregarApt');
$routes->post('/agregarcrud', 'ApartmentownerController::AgregarCrud');
$routes->post('/obtcrud', 'ApartmentownerController::obteCrud');






/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
