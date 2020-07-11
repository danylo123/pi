@extends('website.app')

@section('titulo')
Serviços
@stop


@section('conteudo')

<h2 class="display-4 text-black">Serviços</h2>
<p class="lead text-black mb-0">Ache o que você precisa aqui.</p>
<div class="justify-content-center">
    <form action="{{ route('procurar') }}" method="get" class="form-horizontal">

        <div class="row">
            <input class="form-control col-sm-11" type="text" name="txt" id="txt" placeholder="Pesquisar">
            <button type="submit" class="btn btn-dark">
                Buscar
            </button>
        </div>
    </form>
</div>
<br>
@if(Route::current()->getName() == 'procurar')
<p class="lead">Exibindo <b>{{ $servico->count() }}</b> resultados sobre "<b>{{ $busca }}</b>"</p>
@endif
    @foreach ($servico as $s)
    <div class="media bg-light well col-md-12 rounded">
        <div id="carouselExampleControls{{ $s->id }}" class="carousel align-self-center col-3" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach( $s->arquivo as $photo )
                <li data-target="#carouselExampleIndicators{{ $s->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner" role="listbox" style="height: 12rem;">
                @foreach( $s->arquivo as $i )
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="img-fluid" style="height: 50%; width:60%;" src="{{ url('storage/servicos/'.$i->arquivo) }}" alt="{{ $s->nome }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls{{ $s->id }}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls{{ $s->id }}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="media-body">
            <h5 class="mt-0">{{ $s->nome }}</h5>
            <p>Descrição: {{ $s->descricao }}<br>
                Variação de preço: R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}<br>
                Autônomo: {{ collect(explode(' ', $s->user->name))->slice(0, 3)->implode(' ') }}</p>
            <a href="{{ url('servico/contratar/'.$s->id) }}" class="btn btn-primary" type="button">Contratar</a>
        </div>
    </div>
    <hr class="featurette-divider">

    @endforeach
@stop