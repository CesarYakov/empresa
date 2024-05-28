@extends('layouts.master')

@section('content')
    <h1>Pagina de servicios</h1>
    <h3>¿Que servicio desea realizar?</h3>
    @if($parameter)
         <p>El parametro ingresado fue:{{$parameter}} </p>
    @else
        <p>Sin parametro</p>
    @endif
@stop