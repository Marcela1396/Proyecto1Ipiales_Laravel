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

    public function formularioReg(){
        return view('inventario.formulario');
    }

    public function registrar(){
        return view('inventario.mensaje');
    }

    public function ofertas(){
        return view('inventario.promociones');
    }

    public function hogar(){
        return view('inventario.hogar');
    }

    public function papeleria(){
        $papeleria = [
            '123',
            'Lapicero',
            '1000'
        ];
        
        $mensaje = "Bienvenidos a las ofertas de papeleria";

        $carton = [
            '009',
            'Carton Paja',
            '2500'
        ];
        
        /*
        Opcion 1 de envio de datos a vista
        return view('inventario.papeleria', 
        [
            'papel' => $papeleria,
            'msg' => $mensaje,
            'carton' => $carton
        ]);
        */

        // Opcion 2 de envio de datos a vista
        return view('inventario.papeleria')
        ->with('papel', $papeleria)
        ->with('msg',$mensaje)
        ->with('carton', $carton);

    }

    public function descripcion($id, $descripcion = null){
        return view('inventario.descripcion')
        ->with('id', $id)
        ->with('descripcion', $descripcion);
    }



}
