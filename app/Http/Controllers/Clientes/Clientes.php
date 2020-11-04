<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Clientes extends Controller
{
    //
    public function index(){
        return view('clientes.clientela') ;
    }

    public function preferidos(){
        return view('clientes.preferenciales.favoritos') ;
    }
}
