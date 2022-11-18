<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ManejadorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParametroController;

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

Route::get('/email/client_form', function () {
    return view('email/client_form');
});
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


// formularios

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.contacto');
Route::post('/proyectos/distrito-verde-etapa-1', [ContactoController::class, 'cotizacion'])->name('cotizacion.distrito');
Route::post('/proyectos/pacifico-3100-etapa-2', [ContactoController::class, 'cotizacion'])->name('cotizacion.pacifico');


// paginas de admin

// Route::get('/admin/inicio', function () {
//    return view('admin/inicio');
// })->middleware('auth');

// Route::get('/admin/parametros', [ManejadorController::class, 'parametros'])->middleware('auth');





Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

// Logout
Route::post('/logout', [HomeController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/inicio', function () {
        return view('admin/inicio');
     });
     Route::get('/admin/parametros', [ParametroController::class, 'index']);
     Route::resource('parametros', ParametroController::class);
});