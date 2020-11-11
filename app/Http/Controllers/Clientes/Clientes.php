<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Clientes extends Controller
{
    //
    public function index(){

        $users = [
            array('id' => '1', 'nombre' => 'Juan Dominguez', 'edad' => 25),
            array('id' => '2', 'nombre' => 'Laura Saenz', 'edad' => 21),
            array('id' => '3', 'nombre' => 'Josue Sanchez', 'edad' => 30),
            array('id' => '4', 'nombre' => 'Liliana Martinez', 'edad' => 27)
        ];
        return view('clientes.clientela', compact('users')) ;
    }

    public function detalle($id, $nombre, $edad){
        return view('clientes.detalle', array( 
                                            'id' => $id,
                                            'nombre' => $nombre,
                                            'edad' => $edad
                                        ));
    }

    public function preferidos(){
        return view('clientes.preferenciales.favoritos') ;
    }
}
