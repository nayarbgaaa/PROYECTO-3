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
$routes->setDefaultController('Usuarios');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Usuarios::login');


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


/*DASHBOARD*/
$routes->get('/dashboard', 'Inicio::index');


//INICIA UNIDAD 

/*UNIDADES*/
$routes->get('/unidades', 'Unidades::index');
/*AGREGAR*/
$routes->get('/unidades/nuevo', 'Unidades::nuevo');
$routes->post('/unidades/insertar', 'Unidades::insertar');
/*EDITAR*/
$routes->get('/unidades/editar/(:num)', 'Unidades::editar/$1');
$routes->post('/unidades/actualizar', 'Unidades::actualizar');
/*BORRAR*/
$routes->get('/unidades/eliminar/(:num)', 'Unidades::eliminar/$1');
/*ELIMINADOS*/
$routes->get('/unidades/eliminados', 'Unidades::eliminados');
$routes->get('/unidades/reingresar/(:num)', 'Unidades::reingresar/$1');

//FINALIZA UNIDAD 

//---------------------------------------------------------------------------------

//INICIA CATEGORIAS

/*UNIDADES*/
$routes->get('/categorias', 'Categorias::index');
/*AGREGAR*/
$routes->get('/categorias/nuevo', 'Categorias::nuevo');
$routes->post('/categorias/insertar', 'Categorias::insertar');
/*EDITAR*/
$routes->get('/categorias/editar/(:num)', 'Categorias::editar/$1');
$routes->post('/categorias/actualizar', 'Categorias::actualizar');
/*BORRAR*/
$routes->get('/categorias/eliminar/(:num)', 'Categorias::eliminar/$1');
/*ELIMINADOS*/
$routes->get('/categorias/eliminados', 'Categorias::eliminados');
$routes->get('/categorias/reingresar/(:num)', 'Categorias::reingresar/$1');

//FINALIZA CATEGORIAS---------------------------------------------------------------------------------



//INICIA PRODUCTOS---------------------------------------------------------------------------------

/*UNIDADES*/
$routes->get('/productos', 'Productos::index');
/*AGREGAR*/
$routes->get('/productos/nuevo', 'Productos::nuevo');
$routes->post('/productos/insertar', 'Productos::insertar');
/*EDITAR*/
$routes->get('/productos/editar/(:num)', 'Productos::editar/$1');
$routes->post('/productos/actualizar', 'Productos::actualizar');
/*BORRAR*/
$routes->get('/productos/eliminar/(:num)', 'Productos::eliminar/$1');
/*ELIMINADOS*/
$routes->get('/productos/eliminados', 'Productos::eliminados');
$routes->get('/productos/reingresar/(:num)', 'Productos::reingresar/$1');
/*MUESTRA PDF*/
$routes->get('/productos/muestraProductosPdf', 'Productos::muestraProductosPdf');
/*GENERA PDF*/
$routes->get('/productos/generaProductosPdf', 'Productos::generaProductosPdf');
/*MUESTRA EXCEL*/
$routes->get('/productos/muestraProductosExcel', 'Productos::muestraProductosExcel');

//FINALIZA PRODUCTOS---------------------------------------------------------------------------------



//INICIA CLIENTES---------------------------------------------------------------------------------

/*UNIDADES*/
$routes->get('/clientes', 'Clientes::index');
/*AGREGAR*/
$routes->get('/clientes/nuevo', 'Clientes::nuevo');
$routes->post('/clientes/insertar', 'Clientes::insertar');
/*EDITAR*/
$routes->get('/clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->post('/clientes/actualizar', 'Clientes::actualizar');
/*BORRAR*/
$routes->get('/clientes/eliminar/(:num)', 'Clientes::eliminar/$1');
/*ELIMINADOS*/
$routes->get('/clientes/eliminados', 'Clientes::eliminados');
$routes->get('/clientes/reingresar/(:num)', 'Clientes::reingresar/$1');
/*MUESTRA PDF*/
$routes->get('/clientes/muestraClientesPdf', 'Clientes::muestraClientesPdf');
/*GENERA PDF*/
$routes->get('/clientes/generaClientesPdf', 'Clientes::generaClientesPdf');
/*MUESTRA EXCEL*/
$routes->get('/clientes/muestraClientesExcel', 'Clientes::muestraClientesExcel');

//FINALIZA CLIENTES---------------------------------------------------------------------------------



//INICIA CONFIGURACION

/*UNIDADES*/
$routes->get('/configuracion', 'Configuracion::index');
/*ACTUALIZAR INFO*/
$routes->post('/configuracion/actualizar', 'Configuracion::actualizar');

//FINALIZA CONFIGURACION

//---------------------------------------------------------------------------------

//INICIA USUARIOS

/*INDEX*/
$routes->get('/usuarios', 'Usuarios::index');
/*AGREGAR*/
$routes->get('/usuarios/nuevo', 'Usuarios::nuevo');
$routes->post('/usuarios/insertar', 'Usuarios::insertar');
/*EDITAR*/
$routes->get('/usuarios/editar/(:num)', 'Usuarios::editar/$1');
$routes->post('/usuarios/actualizar', 'Usuarios::actualizar');
/*BORRAR*/
$routes->get('/usuarios/eliminar/(:num)', 'Usuarios::eliminar/$1');
/*ELIMINADOS*/
$routes->get('/usuarios/eliminados', 'Usuarios::eliminados');
$routes->get('/usuarios/reingresar/(:num)', 'Usuarios::reingresar/$1');

//FINALIZA USUARIOS

//---------------------------------------------------------------------------------

//INICIA LOGIN

/*INGRESO*/
$routes->post('/usuarios/valida', 'Usuarios::valida');
/*SALIDA*/
$routes->get('/usuarios/logout', 'Usuarios::logout');
/*CAMBIA CONTRASEÑA*/
$routes->get('/usuarios/cambia_password', 'Usuarios::cambia_password');
/*ACTUALIZAR CONTRASEÑA*/
$routes->post('/usuarios/actualizar_password', 'Usuarios::actualizar_password');

//FINALIZA LOGIN

//---------------------------------------------------------------------------------

//INICIA VENTA 

/*UNIDADES*/
$routes->get('/compras', 'Compras::index');
/*AGREGAR*/
$routes->get('/compras/nuevo', 'Compras::nuevo');
$routes->post('/compras/insertar', 'Compras::insertar');
/*GUARDAR*/
$routes->post('/compras/guarda', 'Compras::guarda');

/*AYAX BUSCAR PRODUCTO*/
$routes->get('/productos/buscarPorCodigo/(:num)', 'Productos::buscarPorCodigo/$1');

/*AYAX AGREGAR PRODUCTO*/
$routes->get('/TemporalCompra/insertar/(:num)/(:num)/(:alphanum)', 'TemporalCompra::insertar/$1/$2/$3');

/*AYAX QUITAR PRODUCTO*/
$routes->get('/TemporalCompra/eliminar/(:num)/(:alphanum)', 'TemporalCompra::eliminar/$1/$2');

//FINALIZA VENTA

//---------------------------------------------------------------------------------

//INICIA REPORTE PDF

/*MUESTRA*/
$routes->get('/compras/muestraCompraPdf/(:num)', 'Compras::muestraCompraPdf/$1');
/*GENERA*/
$routes->get('/compras/generaCompraPdf/(:num)', 'Compras::generaCompraPdf/$1');

//FINALIZA VENTA



//INICIA VENTAS CAJAS---------------------------------------------------------------------------------

/*INDEX*/
$routes->get('/ventas', 'Ventas::index');
/*NUEVA VENTA*/
$routes->get('/ventas/venta', 'Ventas::venta');
/*CANCELA VENTA*/
$routes->get('/ventas/eliminar/(:num)', 'Ventas::eliminar/$1');
/*VISTA CANCELACIONES*/
$routes->get('/ventas/eliminados', 'Ventas::eliminados');
$routes->get('/ventas/reingresar/(:num)', 'Ventas::reingresar/$1');
/*BUSQUEDA POR CLIENTE*/
$routes->get('/clientes/autocompleteData', 'Clientes::autocompleteData');
/*BUSQUEDA POR CODIGO*/
$routes->get('/productos/autocompleteData', 'Productos::autocompleteData');
/*GUARDA*/
$routes->post('/ventas/guarda', 'Ventas::guarda');
/*MUESTRA*/
$routes->get('/ventas/muestraTicket/(:num)', 'Ventas::muestraTicket/$1');
/*GENERA*/
$routes->get('/ventas/generaTicket/(:num)', 'Ventas::generaTicket/$1');

//FINALIZA VENTAS CAJAS---------------------------------------------------------------------------------



