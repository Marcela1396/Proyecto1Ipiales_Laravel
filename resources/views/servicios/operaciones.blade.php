@extends('principal')
@section('contenido')

<div class="alert alert-dark" role="alert">
    <h3> Mensaje {{ $mensaje }} </h3>
</div>

<img src="{{url('imagenes/super.jfif')}}"> 

@stop