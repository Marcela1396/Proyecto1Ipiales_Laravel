@extends('principal')
@section('contenido')
<div class="container">
<h1> Edición de Categorias </h1>

    <form action="{{route('actualizarCategoria', $categoria->id) }}" method="POST">
        @csrf
       
        <label for="nombreCat">Nombre Categoria </label>
        <input type="text" id='nombreCat' name='nombreCat' class="form-control" required  value="{{$categoria->nombreCategoria}}"> <br> <br>
    
        <label for="descripcionCat">Descripcion </label>
        <input type="text" id='descripcionCat' name='descripcionCat' class="form-control" required value="{{$categoria->descripcion}}"> <br> <br>
            
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a type="submit" class="btn btn-danger" href="{{route('listado_categorias')}}">Cancelar</a>

    </form>
@stop
