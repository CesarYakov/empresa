@extends('layouts.master')

@section('content')
<h1>Blog</h1>

    @if($id)
    <p>El parametro ingresado fue:{{$id}} </p>
    @else
    <p>Sin parametro</p>
    @endif

@stop
