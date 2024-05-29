@extends('layouts.master')

@section('content')
<h1>Pagina de Clientes</h1>
<h3>Aqui puede visualizar nuestros clientes más frecuentes</h3>

    @if($nombre)
    <p>El parametro ingresado fue:{{$nombre}} </p>
    @else
    <p>Sin parametro</p>
@endif
@stop
