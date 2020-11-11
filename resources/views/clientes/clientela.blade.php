@extends('principal')
@section('contenido')
    <h3> Clientes </h3>
    <ul>
        @foreach ($users as $u)
        <li>
            {{ $u['nombre']}}
            <a href='{{url("/clientes/$u[id]/$u[nombre]/$u[edad]")}}'> Ver detalles </a>
        </li>
        @endforeach
    </ul>

@stop

