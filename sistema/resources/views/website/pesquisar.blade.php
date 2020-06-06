@extends('website.app')

@section('titulo')
Serviços
@stop


@section('conteudo')

<h2 class="display-4 text-white">Serviços</h2>
<p class="lead text-white mb-0">Ache o que você precisa aqui.</p>
<div class="justify-content-center">
    <form action="{{ route('procurar') }}" method="get" class="form-horizontal">
       
        <div class="row">
            <input class="form-control col-sm-10" type="text" name="txt" id="txt" placeholder="Pesquisar">
            <button type="submit" class="btn btn-dark">
                Buscar
            </button>
        </div>
    </form>
</div>
<div class="separator"></div>
@if(Route::current()->getName() == 'procurar')
<p class="lead text-white">Exibindo <u>{{ $servico->count() }}</u> resultados sobre "<u>{{ $busca }}</u>"</p>
@endif
<div class="row text-black">
    <div class="col-lg-12 row">
        @foreach ($servico as $s)
        <div class="col-md-3">
            <div class="card">
                <div id="{{ url('storage/servicos/'.$s->id) }}" class="carousel slide card-img-top" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach( $s->arquivo as $photo )
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach( $s->arquivo as $i )
                        <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                            <img width='150px' height='150px' class="d-block w-100" src="
                            @if(empty($i))
                            {{ url('storage/servicos/default.jpg') }}
                            @else
                            {{ url('storage/servicos/'.$i->arquivo) }}
                            @endif" alt="{{ $s->nome }}">
                        </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>

                <div class="card-body">
                    <h6 class="card-title">{{ $s->nome }}</h6>
                    <span class="badge">Valor: R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}</span>
                    <span class="badge">Autônomo: {{ collect(explode(' ', $s->user->name))->slice(0, 1)->implode(' ') }}</span>
                    <a href="{{ url('servico/contratar/'.$s->id) }}" class="btn btn-primary btn-block" type="button" id="dropdownMenuButton">Contratar</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>



</div>
@stop