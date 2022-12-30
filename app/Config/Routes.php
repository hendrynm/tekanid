<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\Admin;
use App\Controllers\Auth;
use App\Controllers\Beranda;
use App\Controllers\Tautan;
use App\Controllers\Zoom;

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
$routes->setDefaultController('Beranda');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function(){ return view("errors/404"); });
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
$routes->group("/", function ($routes)
{
    $routes->get("",                [Beranda::class,"index"]);
    $routes->get("produk",          [Beranda::class,"produk"]);
    $routes->get("biaya",           [Beranda::class,"biaya"]);
    $routes->get("testimoni",       [Beranda::class,"testimoni"]);
    $routes->get("kontak",          [Beranda::class,"kontak"]);

    $routes->post("daftar",         [Auth::class,"daftar"]);
    $routes->post("masuk",          [Auth::class,"masuk"]);
    $routes->get("keluar",          [Auth::class,"keluar"]);

    $routes->post("ringkas",        [Tautan::class,"ringkas"]);
    $routes->get("/(:segment)",     [Tautan::class,"alih"]);
});

$routes->group("admin", ["filter" => "auth"], function ($routes)
{
    $routes->get("beranda",         [Admin::class,"beranda"]);

    $routes->group("tautan", function ($routes)
    {
        $routes->get("dasbor",      [Admin::class,"tautan_dasbor"]);
        $routes->get("buat",        [Admin::class,"tautan_buat"]);
        $routes->post("buat",       [Tautan::class,"ringkas_admin"]);
    });

    $routes->group("zoom", function ($routes)
    {
        $routes->get("dasbor",      [Admin::class,"zoom_dasbor"]);

        $routes->get("coba",        [Zoom::class,"jadwal"]);
    });
});

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
