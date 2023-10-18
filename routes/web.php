<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TablaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






/*------------ RUTA PRINCIPAL DEL LOGIN ---------------*/

Route::get('/', function () {
    return view('Login');
})->name('Login');
Route::post('/', [LoginController::class, 'store'])->name('Login');

/*------------ FINAL DE LA RUTA DEL LOGIN --------------*/

/*------------ RUTAS DE ADMINISTRADOR ----------------*/
Route::get('/Page/Administrador', function () {
    return view('Roles.Administrador');
})->name('Administrador.Roles');

Route::get('/VistasAdm/Estatus', function () {
    return view('VistasAdm.Estatus');
})->name('VistasAdm.Estatus');

Route::get('/VistasAdm/Productos', function () {
    return view('VistasAdm.Productos');
})->name('VistasAdm.Productos');

Route::get('/VistasAdm/Registro', function () {
    return view('VistasAdm.Registro');
})->name('VistasAdm.Registro');

Route::get('/VistasAdm/Solicitudes', function () {
    return view('VistasAdm.Solicitudes');
})->name('VistasAdm.Solicitudes');

Route::post('/Page/Administrador', [SolicitudController::class, 'store'])->name('Administrador');
Route::post('/VistasAdm/Estatus', [SolicitudController::class, 'store'])->name('Estatus');
Route::post('/VistasAdm/Solicitudes', [SolicitudController::class, 'store'])->name('Solicitudes');
Route::post('/VistasAdm/Productos', [ProductosController::class, 'store'])->name('Productos');
Route::get('/VistasAdm/Productos', [ProductosController::class, 'productos']);
Route::post('/VistasAdm/Registro', [RegistroController::class, 'store'])->name('Registro');
Route::get('/VistasAdm/Solicitudes', [TablaController::class, 'store'])->name('Tabla');
/*--- FINAL DE LAS RUTAS DEL ADMINISTRADOR ---*/


/*------------------ VISTA DEL SOLICITANTE ------------ */

Route::get('/PageSolicitante/Solicitud', function () {
    return view('VistasSolicitante.index');
})->name('index.VistasSolicitante');

Route::get('/PageSolicitante/Requerimiento', function () {
    return view('VistasSolicitante.Req');
})->name('Req.VistasSolicitante');

/*  Route::post('/PageSolicitante/Solicitud', [SolicitudController::class, 'store'])->name('Solicitud'); */
Route::post('/guardar-datos', [SolicitudController::class, 'store']);
/* Route::get('/PageSolicitante/Solicitud', [SolicitudController::class, 'mostrarArea'])->name('index.VistasSolicitante'); */
/*-------------------- FINAL DE LAS RUTAS DEL SOLICITANTE ------------------*/

/*---------------- TABLA PARA MOSTRAR LOS REGISTROS NUEVOS DEL SOLICITANTES --------------*/
Route::get('/VistasAdm/Registro/Tabla', function () {
    return view('VistasAdm.Registro');
})->name('VistasAdm.Registro');
Route::get('/VistasAdm/Registro', [RegistroController::class, 'Area']);
/*--------------- FINAL DE LA TABLA -------------------------*/
