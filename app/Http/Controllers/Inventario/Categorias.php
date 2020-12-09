<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class Categorias extends Controller
{
    public function index(){
        // Consulta Query Builder
        //$categorias = DB::table('categorias')->get();

        // Consulta a traves de Modelos
        $categorias = Categoria::all();

        // Consultas  y manejo de Where
        //$categorias = Categoria::where('descripcion', 'like','L%')->get();
        return view('inventario.categorias.listado', ['categorias' => $categorias]);   
    }

    public function formularioReg()
    {
        //Mostrar el formulario de registro y la captura de datos
        return view('inventario.categorias.form_registro');
    }


    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listadoCategorias');
    }

    public function actualizar()
    {
        return view('inventario.categorias.form_actualiza');
    }

    public function eliminar()
    {
        return view('inventario.categorias.eliminar');
    }



}
