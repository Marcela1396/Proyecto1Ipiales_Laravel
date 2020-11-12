@extends('principal')
@section('contenido')
    <h1> Formulario de Registro </h1>

    @php    
        $producto = 'Manzanas';
    @endphp
    <form action="{{ route('registrado')}}" method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="nombrePro">Nombre </label>
            <input type="text" id="nombrePro" name="nombrePro" value ="{{ $producto }}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

        <!-- Etiquetas de tipo text sin un value asignado -->
        <div class="form-group">
            <label for="descripcionPro">Descripción </label>
            <input type="text" id="descripcionPro" name="descripcionPro"  class="form-control" placeholder="Descripción" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

        <!-- Etiquetas de tipo password -->
        <div class="form-group">
            <label for="identificador">Identificador </label>
            <input type="password" id="identificador" name="identificador"  class="form-control" placeholder="Identificador" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

         <!-- Etiquetas de tipo hidden -->
        <div class="form-group">
            <input type="hidden" id='id' name='id' value= "oculto">
        </div>

         <!-- Etiquetas de tipo number -->
        <div class="form-group">
            <label for="cantidad">Cantidad </label>
            <input type="number" id='cantidad' name='cantidad' min='2' max='10' class="form-control" placeholder="Cantidad">
        </div>

         <!-- Etiquetas de tipo correo -->
        <div class="form-group">
            <label for="correo">Correo </label>
            <input type="email" id='correo' name='correo' class="form-control" placeholder="Correo" >
        </div>

         <!-- Etiquetas de tipo date -->
        <div class="form-group">
            <label for="fecha">Fecha de Vencimiento </label>
            <input type="date" id='fecha' name='fecha' class="form-control" placeholder="Fecha de Vencimiento" >
        </div>

         <!-- Etiquetas de tipo Textarea -->
        <label for="texto">Comentarios </label>
        <textarea name="texto" id="texto" rows="10" cols="50" class="form-control" > Comentarios </textarea>

        <!-- Etiquetas de tipo Radio -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="categoria" id="categoria1" value="comestible" checked>
            <label class="form-check-label" for="categooria1"> Comestibles  </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="categoria" id="categoria2" value="lacteos">
            <label class="form-check-label" for="categoria2"> Lacteos  </label>
        </div>
        
       <!-- Etiquetas de tipo Checkbox -->
        <div class="form-check">
            <input type="checkbox" name="terminos" id="terms" value="si" class="form-check-input">
            <label class="form-check-label" for="terminos">Aceptar términos</label>
        </div>

        <br>
         <!-- Etiquetas de tipo file -->
        <div class="form-group">
            <label for="foto">Sube la foto:</label> 
            <input type="file" name="foto" id="foto" class="form-control-file">
        </div>

        <br>
         <!-- Etiquetas de tipo Select -->
        <label for="productos">Productos</label> 
        <select class="custom-select" id="productos">
            <option value="1">Lacteos</option>
            <option value="2">Abarrotes</option>
            <option value="3">Golosinas</option>
        </select>

        <br> <br>
         <!-- Etiquetas de tipo button -->
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </form>

@stop