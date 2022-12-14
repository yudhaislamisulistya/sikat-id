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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'OtentikasiController::index', ['filter' => 'NoAuth']);
$routes->get('/login', 'OtentikasiController::login', ['filter' => 'NoAuth']);
$routes->get('/logout', 'OtentikasiController::logout', ['as' => 'logout']);

$routes->group('panel/admin', ['filter' => 'Admin:dual,noreturn'], function($routes){
    $routes->get('dashboard', 'MainController::dashboard', ['as' => 'dashboard_panel']);
    $routes->get('profile', 'MainController::profile', ['as' => 'profile_panel']);
    

    $routes->group('data-perumahan-dosen', function($routes){
        $routes->get('/', 'PerumahanDosenController::index', ['as' => 'data_perumahan_dosen']);
        $routes->post('save', 'PerumahanDosenController::save', ['as' => 'data_perumahan_dosen_save']);
        $routes->post('update', 'PerumahanDosenController::update', ['as' => 'data_perumahan_dosen_update']);
        $routes->post('delete', 'PerumahanDosenController::delete', ['as' => 'data_perumahan_dosen_delete']);
    });

    $routes->group('data-iuran', function($routes){
        $routes->get('/', 'IuranController::index', ['as' => 'data_iuran']);
        $routes->post('save', 'IuranController::save', ['as' => 'data_iuran_save']);
        $routes->post('update', 'IuranController::update', ['as' => 'data_iuran_update']);
        $routes->post('delete', 'IuranController::delete', ['as' => 'data_iuran_delete']);
    });

    $routes->get('cek-iuran', 'IuranController::check', ['as' => 'check_iuran']);
    $routes->post('cek-iuran/detail', 'IuranController::check_detail', ['as' => 'check_iuran_detail']);
});

$routes->group('panel/lecturer', ['filter' => 'Lecturer:dual,noreturn'], function($routes){
    $routes->get('dashboard', 'MainController::dashboard_lecturer', ['as' => 'dashboard_lecturer']);

    $routes->post('check-address-save', 'MainController::check_address_save', ['as' => 'check_address_save']);
    $routes->get('profile', 'MainController::profile', ['as' => 'profile_panel_lecturer']);

    $routes->get('cek-iuran/detail/(:any)', 'IuranController::check_detail_lecturer/$1/', ['as' => 'check_iuran_detail_lecturer']);
});


$routes->get('/get-iuran', 'IuranController::api_get_iuran', ['as' => 'api_get_iuran']);

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
