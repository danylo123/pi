@extends('app')

@section('titulo')
Inicio
@stop

@section('conteudo')
<h1>Olá {{ auth()->user()->name }}</h1>

<div class="panel-body">    
    Você logou com sucesso!
</div>

@stop