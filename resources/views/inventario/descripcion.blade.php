@extends('principal')
@section('contenido')

<h1> Sin Usar blade </h1>
<h1> Descripcion de productos </h1>


<h2> Identificador : <?php echo $id ?> </h2>

<h2> Descripcion : <?php echo $descripcion ?> </h2>

<?php  for($i = 0; $i <=10 ; $i++): ?>
    <p> <?php echo 'El valor actual es: ' . $i ?> </p>
<?php endfor ?>

<br>


<h1> Usando Blade </h1>

@if($descripcion)
    <h2> Identificador : {!! $id !!}</h2>

    <h2> Descripcion : {!! $descripcion !!} </h2>
@else
    <h2> Identificador : {!! $id !!}</h2>
@endif


@for ($i = 0; $i <=10 ; $i++)
    <p> El valor actual es:  {!! $i !!} </p>
@endfor

@stop