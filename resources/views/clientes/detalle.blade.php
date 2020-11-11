@extends('principal')
@section('contenido')

    <h1> Información detallada del Cliente </h1>

    <h2> Identificación : {{ $id }} </h2>
    <h2> Nombre : {{ $nombre }} </h2>
    <h2> Edad : {{ $edad }} </h2>

    <a href="{{ url('/clientes')}}"> Regresar 1 </a>
    <a href="{{ url()->previous() }}"> Regresar 2 </a>
    <a href="{{ url()->full() }}"> Actual </a>

    <a href="{{route('listado')}}"> Regresar 3 </a>

@stop