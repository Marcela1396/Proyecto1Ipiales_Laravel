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
    return view('principal');
});

Route::get('informativo', function () {
    return view('administracion.informacion');
});

Route::get('clientes', function () {
    return view('clientes.clientela') ;
});

Route::get('clientes/preferidos', function () {
    return view('clientes.preferenciales.favoritos') ;
});

Route::get('ofertas', function () {
    return view('promociones');
});

Route::get('productos', function () {
    return view('inventario.productos');
});

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








