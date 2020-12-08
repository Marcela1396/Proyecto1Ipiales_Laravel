<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categorias extends Controller
{
    public function index(){
        $categorias = DB::table('categorias')->get();
        return view('inventario.categorias.listado', ['categorias' => $categorias]);   
    }

    public function formularioReg()
    {
        return view('inventario.categorias.form_registro');
    }


    public function registrar()
    {
        return view('inventario.categorias.form_registro');
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
