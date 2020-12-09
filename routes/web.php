<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Clientes;
use App\Http\Controllers\Inventario\Productos;
use App\Http\Controllers\Inventario\Categorias;
use App\Http\Controllers\Servicios;

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

Route::get('/', [Administracion::class, 'index']); 


Route::get('informativo', [Administracion::class, 'informacion'] );

// Clientes

Route::get('clientes', [Clientes::class, 'index'] )->name('listadoClientes');

Route::get('clientes/registro', [Clientes::class , 'formularioReg'])->name('form_registroCliente');

Route::post('clientes/registro', [Clientes::class, 'registrar'])->name('registrarCliente');

Route::get('clientes/actualizar', [Clientes::class, 'actualizar'])->name('actualizarCliente');

Route::get('clientes/eliminar', [Clientes::class, 'eliminar'])->name('eliminarCliente');

// Productos

Route::get('productos', [Productos::class, 'index'] )->name('listadoProductos');;

Route::get('productos/registro', [Productos::class , 'formularioReg'])->name('form_registroProducto');

Route::post('productos/registro', [Productos::class , 'registrar'])->name('registrarProducto');

Route::get('productos/actualizar', [Productos::class, 'actualizar'])->name('actualizarProducto');

Route::get('productos/eliminar', [Productos::class, 'eliminar'])->name('eliminarProducto');

// Categorias 
Route::get('categorias', [Categorias::class, 'index'])->name('listadoCategorias');

Route::get('categorias/registro', [Categorias::class , 'formularioReg'])->name('form_registroCategoria');

Route::post('categorias/registro', [Categorias::class, 'registrar'])->name('registrarCategoria');

Route::get('categorias/actualizar', [Categorias::class, 'actualizar'])->name('actualizarCategoria');

Route::get('categorias/eliminar', [Categorias::class, 'eliminar'])->name('eliminarCategoria');


// Rutas con parametros
Route::get('productos/{id}/{descripcion?}', [Productos::class, 'descripcion']);

Route::get('servicios/{descripcion}', [Servicios::class, 'index']);

















