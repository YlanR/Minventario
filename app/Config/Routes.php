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
$routes->post('/login', 'Home::login');
$routes->post('/register', 'Home::register');
$routes->get('/registrate', 'Home::registro');
$routes->get('/salir', 'Home::logout');
$routes->add('/inicio', 'Home::dashboard',['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/categorias', 'Categorias::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/agregar-categoria', 'Categorias::agregarCategoria', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/insertarcategoria', 'Categorias::insertCat');
$routes->get('/obtenercategoria/(:any)', 'Categorias::obtenerCategoria/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarcategoria', 'Categorias::actualizarCategoria');
$routes->add('/eliminarCategoria/(:num)', 'Categorias::eliminar/$1');
$routes->add('/inventario', 'Inventario::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->add('/carga_masiva', 'Productos::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/agregar-productos', 'Productos::agregarProducto', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/insertarproducto', 'Productos::insertPro');
$routes->get('/obtenerproducto/(:any)', 'Productos::obtenerProducto/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarproducto', 'Productos::actualizarProducto');
$routes->add('/eliminarproducto/(:num)', 'Productos::eliminar/$1');
$routes->get('/entrada/(:num)', 'Entradas::index/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarentrada', 'Entradas::insertEntrada');
$routes->get('/salida/(:num)', 'Salidas::index/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarsalida', 'Salidas::insertSalida');
$routes->add('/usuarios', 'Usuarios::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/agregar-usuarios', 'Usuarios::agregarUsuario', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/insertarusuario', 'Usuarios::insert');
$routes->get('/obtenerusuario/(:any)', 'Usuarios::obtenerNombre/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarusuario', 'Usuarios::actualizarUsuario');
$routes->add('/eliminarUsuario/(:num)', 'Usuarios::eliminar/$1');
$routes->add('/roles', 'Usuarios::roles',['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/obtenerrol/(:any)', 'Usuarios::obtenerRol/$1', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/actualizarrol', 'Usuarios::actualizarRol');
$routes->get('/compras', 'Compras::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->get('/ventas', 'Ventas::index', ['filter'  => \App\Filters\SessionAdmin::class]);
$routes->post('/buscar', 'Buscar::index');
$routes->post('/buscarusuario', 'Buscar::usuario');
$routes->post('/buscarcar', 'Buscar::indexdos');
$routes->get('/merma', 'Ventas::perdidas', ['filter'  => \App\Filters\SessionAdmin::class]);









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
