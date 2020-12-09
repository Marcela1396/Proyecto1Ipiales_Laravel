@extends('principal')
@section('contenido')

<div class="container">
    <br> <br>
    <h3> Registro de Categorias </h3>
    <form action ="{{url('categorias/registro')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Categoria" aria-label="nombre" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" required>
        </div>

        <button type="submit" class="btn btn-success"> Registrar </button>

    </form>

</div>

@stop