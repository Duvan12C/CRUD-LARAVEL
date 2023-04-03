<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/w', function () {
    return view('welcome');
});


Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/nuevo', [ProductoController::class, 'store'])->name('crear');

Route::get('/productos/{id}/editar', [ProductoController::class, 'show'])->name('productos.editar');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');


Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');


