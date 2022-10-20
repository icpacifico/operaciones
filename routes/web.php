<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

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
    return view('home');
})->name('/');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/ais', function () {
    return view('ais');
})->name('ais');

Route::get('/ventas', function () {
    return view('ventas');
})->name('ventas');

Route::get('/operaciones', function () {
    return view('operaciones');
})->name('operaciones');

Route::get('/postventa', function () {
    return view('postventa');
})->name('postventa');

Route::get('/email/contact_form', function () {
    return view('email/contact_form');
})->name('email.contact_form');

// PROYECTOS

Route::get('/proyectos/distrito-verde-etapa-1', function () {
    return view('proyectos/distrito-verde-etapa-1');
})->name('proyectos.distrito-verde-etapa-1');

Route::get('/proyectos/pacifico-3100-etapa-1', function () {
    return view('proyectos/pacifico-3100-etapa-1');
})->name('proyectos.pacifico-3100-etapa-1');

Route::get('/proyectos/pacifico-3100-etapa-2', function () {
    return view('proyectos/pacifico-3100-etapa-2');
})->name('proyectos.pacifico-3100-etapa-2');


// Envio de datos

Route::post('/contactos', [ContactoController::class, 'store'])->name('contacto.send');
Route::post('/contactos', [ContactoController::class, 'cotizacion'])->name('cotizacion.send');

// Route::controller(ContactoController::class)->group(function () {
//     Route::post('/contactos', 'cotizacion')->name('cotizacion.send');
//     Route::post('/contactos', 'store')->name('contacto.send');
// });
