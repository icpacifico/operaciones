<?php

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




Route::controller(IndexController::class)->group(function () {
    // Route::get('/indexs/{id}', 'show');
    // Route::post('/indexs', 'store');
   // Route::get('/sitioweb/app','seccion')->name('base');
});
// Route::get('/sitioweb/app', [IndexController::class, 'seccion'])->name('sitioweb.app');
// Route::get('/indexes', function (User $user) {
//     return $user->email;
// });
