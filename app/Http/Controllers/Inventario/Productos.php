<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function index(){
        return view('inventario.productos');
    }

    public function ofertas(){
        return view('promociones');
    }
}
