<?php


use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('productos.index');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/crear', [ProductoController::class, 'create'])->name('crear_productos');
Route::post('/productos/guardar', [ProductoController::class, 'almacenar'])->name('guardar_producto');

Route::get('/productos/{id}/editar',[ProductoController::class, 'editar'] )->name('editar_productos');
Route::post('/productos/actualizar/{id}', [ProductoController::class, 'actualizar'])->name('actualizar_producto');

Route::get('/productos/eliminar/{id}', [ProductoController::class, 'eliminar'])->name('eliminar_producto');



















