<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicios extends Controller
{
    public function index($descripcion){
        return view('servicios.operaciones', array('mensaje' => $descripcion));
    }
}
