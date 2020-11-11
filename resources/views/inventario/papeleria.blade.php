@extends('principal')
@section('contenido')
<h1> Papeleria </h1>

<h1> {{ $msg }} </h1>

<h2> Papeleria </h2>
<ul>
@foreach ($papel as $p)
   <li> {{ $p }} </li>
@endforeach
</ul>

<h2> Seccion Carton </h2>
<ul>
@foreach ($carton as $c)
   <li> {{ $c }} </li>
@endforeach
</ul>

@stop

