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
        return view('inventario.productos.productos', ['productos' => $productos]);

    }

    public function formularioReg(){
        return view('inventario.productos.form_registro');
    }

    public function registrar(){
        return view('inventario.productos.mensaje');
    }

    public function actualizar(){
        return view('inventario.productos.form_actualiza');
    }

    public function eliminar(){
        return view('inventario.productos.eliminar');
    }

    

    
   

    



}
