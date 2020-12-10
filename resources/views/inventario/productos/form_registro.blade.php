@extends('principal')
@section('contenido')
    <h1> Formulario de Registro </h1>

    <form action="{{route('registrarProducto')}}" method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="nombrePro">Nombre </label>
            <input type="text" id="nombrePro" name="nombrePro"  class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

         <!-- Etiquetas de tipo number -->
        <div class="form-group">
            <label for="cantidadPro">Cantidad </label>
            <input type="number" id='cantidadPro' name='cantidadPro' min='1' max='1000' class="form-control" placeholder="Cantidad">
        </div>

         <!-- Etiquetas de tipo number -->
         <div class="form-group">
            <label for="precioPro">Precio </label>
            <input type="number" id='precioPro' name='precioPro' min='100'  class="form-control" placeholder="Cantidad">
        </div>

         <!-- Etiquetas de tipo file -->
         <div class="form-group">
            <label for="fotoPro">Sube la foto:</label> 
            <input type="file" name="fotoPro" id="fotoPro" class="form-control-file">
        </div>

         <!-- Etiquetas de tipo Select -->
        <label for="productos">Productos</label> 
        <select class="custom-select" id="productos" name="categorias">
            @foreach($categorias as $c)
            <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
            @endforeach
        </select>

        <br> <br>
         <!-- Etiquetas de tipo button -->
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </form>

@stop