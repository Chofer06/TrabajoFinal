<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;

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

//Principal
Route::get('/', [InicioController::class,'Index']);
Route::get('/dashboard', [InicioController::class,'Inicio']);

//Productos

//Categorias
Route::get('categoria/listado',[CategoriasController::class,'Listado'])->name('listado');
Route::get('categoria/registro', [CategoriasController::class,'RegistroForm']);
Route::post('categoria/registro', [CategoriasController::class,'Registro']);
Route::get('categoria/actualizar/{id}', [CategoriasController::class,'ActualizarForm'])->name('form_actualizacat');
Route::post('categoria/actualizar/{id}',[CategoriasController::class,'Actualizar'])->name('actualizacat');
Route::get('categoria/eliminar/{id}',[CategoriasController::class,'Eliminar'])->name('eliminarcat');
Route::get('categoria/consulta', [CategoriasController::class,'ConsultaForm'])->name('form_consultacat');
Route::post('categoria/consulta', [CategoriasController::class,'Consulta'])->name('consultacat');
//Clientes

//Ventas

require __DIR__.'/auth.php';

/*Route::get('/dashboard', function () {    
})->middleware(['auth'])->name('dashboard');*/
