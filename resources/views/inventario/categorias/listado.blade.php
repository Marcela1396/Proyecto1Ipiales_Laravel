@extends('principal')
@section('contenido')

<h1> Categorias de productos </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Descripción </th>
            <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->nombreCategoria }} </td>
                <td> {{ $c->descripcion }}</td>
                <td> <a href="{{route('form_actualizaCategoria',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('eliminarCategoria', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop