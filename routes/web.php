<?php

use App\Http\Controllers\HerraminetasController;
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

//  Route::get('contacto', "AlertaStockController@stockCaducidad")->name("productosObservacion");

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
        return view('inicio');
});

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/iconos', function () {
    return view('iconos');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/inversores', function () {
    return view('inversores');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/proyectos2', function () {
    return view('proyectos2');
});

Route::get('/proyectos3', function () {
    return view('proyectos3');
});

Route::get('/proyectos4', function () {
    return view('proyectos4');
});

Route::get('/contacto', function () {
    return view('contacto');
});

//Enviar Correo
route::post('formulario',[HerraminetasController::class, 'datosEmail'])->name('enviarCorreo');
