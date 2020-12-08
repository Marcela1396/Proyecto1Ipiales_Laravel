@extends('principal')
@section('contenido')
    <h1> Categorias de Productos </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Descripción </th>
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombreCategoria }} </td>
            <td> {{ $c->descripcion }}</td>
            </tr>
        
    @endforeach
    </tbody>
</table

@stop