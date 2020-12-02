<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function index(){
        /* Select * from productos
        $productos = DB::table('productos')->get();
        return view('inventario.productos', ['productos' => $productos]);
        */

        /* Obtener un solo registro
        $product = DB::table('productos')->first();
        return view('inventario.resultado', ['p' => $product]);
        */

        /* Clausula where
        $productos = DB::table('productos')
                    ->where('categoria', '=', 1)
                    ->where('cantidadProducto', '>', 50)
                    ->orwhere('precioProducto', '<=', 10000)
                    ->get();
        return view('inventario.productos', ['productos' => $productos]);

        */

        // Metodo Value
        /*
        $producto = DB::table('productos')
                     ->where('categoria', '=', 1)
                     ->where('cantidadProducto', '>', 50)
                     ->value('id');
        return view('inventario.resultado', ['p' => $producto]);    
        */
        // Order By
        /*
        $productos = DB::table('productos')
                    ->where('categoria', '=', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        return view('inventario.productos', ['productos' => $productos]);   
        
        */
        
        /* Skip / Take
        //$productos = DB::table('productos')->skip(0)->take(2)->get();
        //offset / limit
        $productos = DB::table('productos')->offset(2)->limit(2)->get();
        return view('inventario.productos', ['productos' => $productos]);
        */

        // Join
        $productos = DB::table('productos')
                    ->join('categorias', 'categoria', '=', 'categorias.id')
                    ->get();
        return view('inventario.productos', ['productos' => $productos]);

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

    public function categorias(){
        return view('inventario.categorias');
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
