<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ZapatoController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/carritos', [CarritoController::class, 'index'])
        ->name('carritos.index')
        ->middleware('auth');

    Route::post('/carritos/meter/{zapato}', [ZapatoController::class, 'add'])
        ->name('zapatos.add');

    Route::post('/carritos/meter/{zapato}', [CarritoController::class, 'add'])
        ->name('carritos.add');

    Route::post('/carrito/sumar/{zapato}', [CarritoController::class, 'sumar'])
        ->name('carritos.sumar');

    Route::post('/carrito/restar/{zapato}', [CarritoController::class, 'restar'])
        ->name('carritos.restar');

    Route::post('/carritos/eliminar/{zapato}', [CarritoController::class, 'delete'])
        ->name('carritos.delete');

    Route::post('/carritos/vaciar', [CarritoController::class, 'vaciar'])
        ->name('carritos.vaciar');
});

Route::get('/zapatos', [ZapatoController::class, 'index'])
    ->name('zapatos.index')
    ->middleware('auth');

Route::get('/zapatos/{zapato}', [ZapatoController::class, 'show'])
    ->name('zapatos.show');

require __DIR__.'/auth.php';
