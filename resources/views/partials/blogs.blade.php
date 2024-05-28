@extends('layouts.master')

@section('content')
<h1>Blog</h1>

    @if($parameter)
    <p>El parametro ingresado fue:{{$parameter}} </p>
    @else
    <p>Sin parametro</p>
    @endif

@stop