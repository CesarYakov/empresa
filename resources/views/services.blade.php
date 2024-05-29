@extends('layouts.master')

@section('content')
    <h1>Pagina de servicios</h1>
    <h3>¿Que servicio desea realizar?</h3>
    @if($nombre)
         <p>El parametro ingresado fue:{{$nombre}} </p>
    @else
        <p>Sin parametro</p>
    @endif
@stop
