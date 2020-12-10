<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


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

        //Muestra el listado de productos 
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.nombreProducto', 'pro.fotoProducto', 'cat.nombreCategoria')
                    ->get();
        return view('inventario.productos.productos', ['productos' => $productos]);

    }

    public function detalle($id) {
        $producto = Producto:: findOrFail($id);
        return view('inventario.productos.detalle', compact('producto'));

    }

    public function formularioReg(){
        $categorias = Categoria::all();
        return view('inventario.productos.form_registro', compact('categorias'));
    }

    public function registrar(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoProductos');
        
    }

    public function formularioAct($id){
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('inventario.productos.form_actualiza', compact('producto','categorias'));
    }


    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $product = Producto::findOrFail($id);
        $product->nombreProducto = $request->input('nombrePro');
        $product->cantidadProducto = $request->input('cantidadPro');
        $product->precioProducto = $request->input('precioPro');
        $product->fotoProducto = $request->input('fotoPro');   
        $product->categoria = $request->input('categorias');
        $product->save();
        return redirect()->route('listadoProductos');
    }

    public function eliminar($id){
        $product = Producto::findOrFail($id);
        $product->delete();
        return redirect()->route('listadoProductos');
    }

    public function form_consulta(){
       return view('inventario.productos.form_consulta');
    }

    public function consultar(Request $request){
       $nombre = $request->input('nombrePro');
       $producto = Producto::where('nombreProducto', 'like',$nombre)->first();
       if($producto)
            return view('inventario.productos.resultado', compact('producto'));
        else
            return view('inventario.productos.mensaje');

    }

    

    
   

    



}
