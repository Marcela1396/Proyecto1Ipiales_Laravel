<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
class Clientes extends Controller
{
    public function index(){
        // Consultar clientes con Eloquent
        $clientes = Cliente::all();   
        return view('clientes.listado',['clientes' => $clientes] );
    }

    public function form_registro()  {
        return view('clientes.form_registro');
    }


    public function registrar(Request $request) {
        $cliente = new Cliente();
        $cliente->nombreCliente = $request->input('nombreCli');
        $cliente->cedulaCliente = $request->input('cedula');
        $cliente->direccionCliente = $request->input('direccion');
        $cliente->telefonoCliente = $request->input('telefono');
        $cliente->generoCliente = $request->input('genero');
        $cliente->save();
        return redirect()->route('listado_clientes');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $cliente = Cliente::findOrFail($id);
        return view ('clientes.form_actualiza', compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombreCliente = $request->input('nombreCli');
        $cliente->cedulaCliente = $request->input('cedula');
        $cliente->direccionCliente = $request->input('direccion');
        $cliente->telefonoCliente = $request->input('telefono');
        $cliente->generoCliente = $request->input('genero');
        $cliente->save();
        return redirect()->route('listado_clientes');  
    }

    public function eliminar($id)
    {
        $c = Cliente::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_clientes');
    }

}
