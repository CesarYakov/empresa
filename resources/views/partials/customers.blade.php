@extends('layouts.master')

@section('content')
<h1>Pagina de Clientes</h1>
<h3>Aqui puede visualizar nuestros clientes más frecuentes</h3>

    @if($parameter)
    <p>El parametro ingresado fue:{{$parameter}} </p>
    @else
    <p>Sin parametro</p>
@endif
@stop