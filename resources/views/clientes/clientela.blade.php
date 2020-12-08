@extends('principal')
@section('contenido')
    <h3> Clientes </h3>
    <ul>
        @foreach ($users as $u)
        <li>
            {{ $u['nombre']}}
        </li>
        @endforeach
    </ul>

@stop

