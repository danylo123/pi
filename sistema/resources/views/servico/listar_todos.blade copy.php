@extends('app')

@section('titulo')
Serviços
@stop

@section('conteudo')

<h3>Todos os serviços</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    @foreach ($servico as $s)
                    <div class="col-md-4">
                        <div class="card" style="width: 250px;">
                            <div id="carouselExampleControls{{ $s->id }}" class="carousel slide card-img-top" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach( $s->arquivo as $photo )
                                    <li data-target="#carouselExampleIndicators{{ $s->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    @foreach( $s->arquivo as $i )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="w-100" height="170px" src="{{ url('storage/servicos/'.$i->arquivo) }}" alt="{{ $s->nome }}">
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
                            <div class="card-body">
                                <h5 class="card-title">{{ $s->nome }}</h5>
                                <p class="card-text">Descrição: {{ $s->descricao }}</p>
                                <p class="card-text">Preço: R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}</p>
                                <p class="card-text">Autônomo: {{ collect(explode(' ', $s->user->name))->slice(0, 3)->implode(' ') }}</p>

                                <a href="{{ url('servico/contratar/'.$s->id) }}" class="btn btn-primary btn-block" type="button" id="dropdownMenuButton">Contratar</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@stop