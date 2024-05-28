@extends('layouts.master')

@section('content')
<h1>Pagina de Proyectos</h1>
<h3>¿Que Proyecto desea realizar?</h3>

    @if($parameter)
    <p>El parametro ingresado fue:{{$parameter}} </p>
    @else
    <p>Sin parametro</p>
    @endif

@stop