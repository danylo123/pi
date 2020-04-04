@extends('app')

@section('titulo')
Inicio
@stop

@section('conteudo')
<h1>Olá usuário</h1>



<div class="alert alert-success">
    {{ session()->get('key') }}
</div>

@stop