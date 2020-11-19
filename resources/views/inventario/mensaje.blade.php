@extends('principal')
@section('contenido')
    <h1> Producto Registrado </h1>
    @php
        $nombrePro = $_POST['nombrePro']
    @endphp

    <h1> Nombre Producto: {{ $nombrePro }} </h1>

@stop 