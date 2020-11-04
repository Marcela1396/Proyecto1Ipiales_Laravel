<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Clientes;
use App\Http\Controllers\Inventario\Productos;

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

Route::get('clientes', [Clientes::class, 'index'] );

Route::get('clientes/preferidos', [Clientes::class, 'preferidos']);

Route::get('productos', [Productos::class, 'index'] );

Route::get('productos/ofertas', [Productos::class, 'ofertas'] );


Route::get('papeleria', function () {
    return view('inventario.papeleria', array('id'=> '1', 
                                              'nombre' => 'Cuadernos', 
                                              'precio'=> '2000'));
});

// Rutas con parametros
Route::get('servicios/{descripcion}', function ($descripcion) {
    return view('servicios.operaciones', array('mensaje' => $descripcion));
});

/*
Route::get('productos/{id}', function ($id) {
    return 'Producto : '. $id;
})->where('id','[0-9]+');

Route::get('productos/hogar', function () {
    return 'Productos del Hogar';
});

*/
Route::get('productos/hogar', function () {
    return 'Productos del Hogar';
});

Route::get('productos/{id}/{descripcion?}', function ($id, $descripcion = null) {
    return view('inventario.descripcion')
    ->with('id', $id)
    ->with('descripcion', $descripcion);
});








