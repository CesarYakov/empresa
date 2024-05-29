@extends('layouts.master')

@section('content')
<h1>Pagina de Proyectos</h1>
<h3>¿Que Proyecto desea realizar?</h3>

    @if($nombre)
    <p>El parametro ingresado fue:{{$nombre}} </p>
    @else
    <p>Sin parametro</p>
    @endif

@stop
