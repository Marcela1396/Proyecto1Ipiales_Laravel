<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Clientes;
use App\Http\Controllers\Inventario\Productos;
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

Route::get('clientes', [Clientes::class, 'index'] )->name('listado');

Route::get('clientes/{id}/{nombre}/{edad}', [Clientes::class, 'detalle']);

Route::get('clientes/preferidos', [Clientes::class, 'preferidos']);

Route::get('productos', [Productos::class, 'index'] );

Route::get('productos/registro', [Productos::class , 'formularioReg'])->name('registrarPro');

Route::post('productos/registro', [Productos::class , 'registrar'])->name('registrado');

Route::get('productos/ofertas', [Productos::class, 'ofertas'] );


Route::get('productos/hogar', [Productos::class, 'hogar']);


Route::get('productos/papeleria', [Productos::class, 'papeleria']);

// Rutas con parametros
Route::get('productos/{id}/{descripcion?}', [Productos::class, 'descripcion']);

Route::get('servicios/{descripcion}', [Servicios::class, 'index']);

















