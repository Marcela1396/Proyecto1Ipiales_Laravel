@extends('principal')
@section('contenido')
    <h1> Formulario de Consulta </h1>
    <form action="{{route('consulta_productos')}}" method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="nombrePro">Nombre </label>
            <input required type="text" id="nombrePro" name="nombrePro"  class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>
         <!-- Etiquetas de tipo button -->
         <button type="submit" class="btn btn-primary">Consultar</button>
    </form>



@stop