@extends('website.app')

@section('titulo')
Inicio
@stop

@section('carosel')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="{{ url('/images/maquina.jpeg') }}" alt="Primeira foto">
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="{{ url('/images/pedreiro.jpg') }}" alt="Segunda foto">
        </div>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Voltar</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Avançar</span>
    </a>
</div>
@stop

@section('conteudo')

<!-- Três colunas de texto, abaixo do carousel -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="display-4">Mercado de serviços</h2>
        <p class="lead mb-0">O Mercado de Serviço é um sistema feito para você, trabalhador informal que quer divulgar os seus serviços, ou para você que está precisando de alguém que realize serviços em sua casa, empresa, você decide! E sabe o que é melhor? Você não paga nada por isso.
            Conheça os serviços ofertados clicando <a href="{{ url('/pesquisar') }}">aqui</a>.<br> Quer ofertar serviços? <a href="{{ url('/register') }}">Crie agora mesmo sua conta.</a> É grátis, é rápido!</p>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

<hr class="featurette-divider">


<!-- /FIM DAS FEATUREZINHAS *-* -->
@stop