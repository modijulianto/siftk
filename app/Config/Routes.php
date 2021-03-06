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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->get('/Auth/login', 'Auth::login');
$routes->get('/beasiswa', 'Home::beasiswa');
$routes->get('/prestasi', 'Home::prestasi');
$routes->get('/seminar', 'Home::seminar');
$routes->get('/pengurus_inti', 'Home::pengurus_inti');
$routes->get('/pendidikan_penalaran', 'Home::pendidikan_penalaran');
$routes->get('/psdm', 'Home::psdm');
$routes->get('/kerumahtanggaan', 'Home::kerumahtanggaan');
$routes->get('/sosmas', 'Home::sosmas');
$routes->get('/berkas', 'Home::berkas');
$routes->get('/detail/(:any)', 'Home::detail/$1');

// ========== ADMIN ROUTES ==========
$routes->get('/Dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/MasterData/kategori_berkas/', 'MasterData::index', ['filter' => 'auth']);
$routes->get('/MasterData/unit/', 'MasterData::unit', ['filter' => 'auth']);
$routes->get('/Berkas', 'Berkas::index', ['filter' => 'auth']);
$routes->get('/Berkas/delete/(:any)', 'Berkas::delete/$1', ['filter' => 'auth']);
$routes->get('/Berita', 'Berita::index', ['filter' => 'auth']);
$routes->get('/Berita/delete/(:any)', 'Berita::delete/$1', ['filter' => 'auth']);
$routes->get('/Berita/tambah', 'Berita::tambah', ['filter' => 'auth']);
$routes->get('/Berita/tambah', 'Berita::tambah', ['filter' => 'auth']);
$routes->get('/Aspirasi', 'Aspirasi::index', ['filter' => 'auth']);
// ========== END ADMIN ROUTES ==========

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
