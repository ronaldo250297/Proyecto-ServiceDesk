<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
//Usuario
$routes->get('listarusuario', 'Usuarios::index');
$routes->get('crearusuario', 'Usuarios::crearusuario');
$routes->post('guardarusuario', 'Usuarios::guardarusuario');
$routes->get('borrarusuario/(:num)', 'Usuarios::borrarusuario/$1');
$routes->get('editarusuario/(:num)', 'Usuarios::editarusuario/$1');
$routes->post('actualizarusuario', 'Usuarios::actualizarusuario');

//Empleado
$routes->get('listarempleado', 'Empleados::index');
$routes->get('crearempleado', 'Empleados::crearempleado');
$routes->post('guardarempleado', 'Empleados::guardarempleado');
$routes->get('borrarempleado/(:num)', 'Empleados::borrarempleado/$1');
$routes->get('editarempleado/(:num)', 'Empleados::editarempleado/$1');
$routes->post('actualizarempleado', 'Empleados::actualizarempleado');

//Incidencia
$routes->get('listarincidencia', 'Incidencias::index');
$routes->get('crearincidencia', 'Incidencias::crearincidencia');
$routes->post('guardarincidencia', 'Incidencias::guardarincidencia');
$routes->get('borrarincidencia/(:num)', 'Incidencias::borrarincidencia/$1');
$routes->get('editarincidencia/(:num)', 'Incidencias::editarincidencia/$1');
$routes->post('actualizarincidencia', 'Incidencias::actualizarincidencia');

//Respuesta
$routes->get('listarrespuesta', 'Respuestas::index');
$routes->get('crearrespuesta', 'Respuestas::crearrespuesta');
$routes->post('guardarrespuesta', 'Respuestas::guardarrespuesta');
$routes->get('borrarrespuesta/(:num)', 'Respuestas::borrarrespuesta/$1');
$routes->get('editarrespuesta/(:num)', 'Respuestas::editarrespuesta/$1');
$routes->post('actualizarrespuesta', 'Respuestas::actualizarrespuesta');

//Area
$routes->get('listararea', 'Areas::index');
$routes->get('creararea', 'Areas::creararea');
$routes->post('guardararea', 'Areas::guardararea');
$routes->get('borrararea/(:num)', 'Areas::borrararea/$1');
$routes->get('editararea/(:num)', 'Areas::editararea/$1');
$routes->post('actualizararea', 'Areas::actualizararea');

//Incidencia por Area
$routes->get('listartraslado', 'Traslados::index');
$routes->get('creartraslado', 'Traslados::creartraslado');
$routes->post('guardartraslado', 'Traslados::guardartraslado');
$routes->get('borrartraslado/(:num)', 'Traslados::borrartraslado/$1');
$routes->get('editartraslado/(:num)', 'Traslados::editartraslado/$1');
$routes->post('actualizartraslado', 'Traslados::actualizartraslado');