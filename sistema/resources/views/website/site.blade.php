@extends('website.app')

@section('titulo')
Inicio
@stop

@section('conteudo')

<h2 class="display-4 text-white">Mercado de serviços</h2>
<p class="lead text-white mb-0">O Mercado de Serviço é um sistema feito para você, trabalhador informal que quer divulgar os seus serviços, ou para você que está precisando de alguém que realize serviços em sua casa, empresa, você decide! E sabe o que é melhor? Você não paga nada por isso.
    Conheça os serviços ofertados clicando <a class="badge badge-dark" href="{{ url('/pesquisar') }}">aqui</a>.<br> Quer ofertar serviços? <a class="badge badge-dark" href="{{ url('/register') }}">Crie agora mesmo sua conta.</a> É grátis, é rápido!</p>
<div class="separator"></div>
@stop