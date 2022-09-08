<?php

use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', [SitioController::class, 'landingpage']);

/* Route::get('/landingpage', function () {
    return view('landinpage');
}); */

Route::get('/contacto/{codigo_id?}', [SitioController::class, 'contacto']); /* {

    if (!empty($codigo_id) && ($codigo_id == '1234')) {
        $nombre = "Axl Coronado";
        $email = "axlville5@gmail.com";
    } else {
        $nombre = "";
        $email = "";
        $codigo_id = null;
    }

    return view('contacto', compact('nombre', 'email', 'codigo_id'));
}); */
