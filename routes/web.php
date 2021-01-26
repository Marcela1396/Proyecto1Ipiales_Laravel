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
Route::get('clientes', [Clientes::class, 'index'])
	->name('listado_clientes');

Route::get('clientes/registrar', [Clientes::class, 'form_registro'])
	->name('form_registroCli');

Route::post('clientes/registrar', [Clientes::class, 'registrar'])
	->name('registrar_cliente');

Route::get('clientes/actualizar/{id}', [Clientes::class, 'form_actualiza'])
	->name('form_actualizaCli');

Route::post('clientes/actualizar/{id}', [Clientes::class, 'actualizar'])
	->name('actualiza_cliente');

Route::get('clientes/eliminar/{id}', [Clientes::class, 'eliminar'])
	->name('elimina_Cliente');



// Productos

Route::get('productos', [Productos::class, 'index'] )->name('listadoProductos');

Route::get('productos/detalle/{id}', [Productos::class, 'detalle'] )->name('detalleProducto');;

Route::get('productos/registro', [Productos::class , 'formularioReg'])->name('form_registroProducto');

Route::post('productos/registro', [Productos::class , 'registrar'])->name('registrarProducto');

Route::get('productos/actualizar/{id}', [Productos::class, 'formularioAct'])->name('form_actualizaProducto');

Route::post('productos/actualizar/{id}', [Productos::class, 'actualizar'])->name('actualizarProducto');

Route::get('productos/eliminar/{id}', [Productos::class, 'eliminar'])->name('eliminarProducto');

Route::get('productos/consulta', [Productos::class, 'form_consulta'])
	->name('form_consultaProducto');

Route::post('productos/consulta', [Productos::class, 'consultar'])
    ->name('consulta_productos');


    

// Categorias 
Route::get('categorias', [Categorias::class, 'index'])->name('listado_categorias');

Route::get('categorias/registro', [Categorias::class, 'form_registro'])
        ->name('form_registroCategoria');

Route::post('categorias/registro', [Categorias::class, 'registrar'])
        ->name('registrarCategoria');

Route::get('categorias/actualizar/{id}', [Categorias::class, 'form_actualiza'])
		->name('form_actualizaCategoria');
		
Route::post('categorias/actualizar/{id}', [Categorias::class, 'actualizar'])
    	->name('actualizarCategoria');

Route::get('categorias/eliminar/{id}', [Categorias::class, 'eliminar'])
		->name('eliminarCategoria');
		


// Rutas con parametros
Route::get('productos/{id}/{descripcion?}', [Productos::class, 'descripcion']);

Route::get('servicios/{descripcion}', [Servicios::class, 'index']);

















