<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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


 $routes->get('/wisata', 'Wisata::index');
 
 

 
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Admin\DashboardController::index');
// $routes->get('/wisata', 'Wisata::index');

//Routes ADMIN DASHBOARD
$routes->get('dashboard', 'Admin\DashboardController::index');

//Routes ADMIN PRODUK
$routes->get('produk', 'Admin\ProdukController::index');
$routes->get('produk/tambah', 'Admin\ProdukController::create');
$routes->post('produk/create_data', 'Admin\ProdukController::create_data');



//Routes ADMIN kategori
$routes->get('kategori', 'Admin\ProdukController::kategori');

//Routes ADD DATA
$routes->get('/add_data_wisata', 'Wisata::add_data_wisata');
$routes->post('produk/proses_add_wisata', 'Wisata::proses_add_wisata');

//Routes EDIT DATA
$routes->get('/edit_data_wisata/(:any)', 'Wisata::edit_data_wisata/$1');
$routes->post('/proses_edit_wisata', 'Wisata::proses_edit_wisata');

//Routes DELETE DATA
$routes->get('/delete_data_wisata/(:any)', 'Wisata::delete_data_wisata/$1');

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