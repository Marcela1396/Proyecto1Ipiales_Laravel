@extends('principal')
@section('contenido')

<h4> Productos </h4>
<div class="container"> 
    <div class="row">
        @foreach($productos as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/imagenes/productos/$p->fotoProducto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->nombreProducto}} </h5>
                    <p class="card-text"> Identificador: {{$p->id}} </p>
                    <p class="card-text"> Categoria: {{$p->nombreCategoria}} </p>
                </div>
                <a href="{{route('detalleProducto', $p->id)}}" class="btn btn-primary" > Ver detalles </a>
            </div>
           
        </div>
        @endforeach
    </div>
</div>
@stop