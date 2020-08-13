<?php namespace Config;

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
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/registro', 'regCont::index');
$routes->get('/blog', 'blogCont::index');
$routes->get('/recientes', 'recCont::index');
$routes->get('/tienda', 'tienCont::index');
$routes->get('/admin', 'adminCont::index');
$routes->get('/acercade', 'AcercaCont::index');

$routes->get('/Cliente', 'CRUDCliCont::index');
$routes->get('/CRUDCliCont/eliminar(:any)', 'CRUDCliCont::eliminar/$1');
$routes->get('/Empleado', 'CRUDEmpleCont::index');
$routes->get('/CRUDEmpleCont/eliminar(:any)', 'CRUDEmpleCont::eliminar/$1');
$routes->get('/Empresa', 'CRUDEmpreCont::index');
$routes->get('/CRUDEmpreCont/eliminar(:any)', 'CRUDEmpreCont::eliminar/$1');
$routes->get('/Juego', 'CRUDJueCont::index');
$routes->get('/CRUDJueCont/eliminar(:any)', 'CRUDJueCont::eliminar/$1');
$routes->get('/Stock', 'CRUDStoCont::index');
$routes->get('/CRUDStoCont/eliminar(:any)', 'CRUDStoCont::eliminar/$1');
$routes->get('/Venta', 'CRUDVenCont::index');
$routes->get('/CRUDVenCont/eliminar(:any)', 'CRUDVenCont::eliminar/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
