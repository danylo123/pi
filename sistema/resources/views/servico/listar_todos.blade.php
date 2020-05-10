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
                            <div id="{{ url('storage/servicos/'.$s->id) }}" class="carousel slide card-img-top" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach( $s->arquivo as $photo )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>

                                <div class="carousel-inner">
                                    @foreach( $s->arquivo as $i )
                                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                        <img width='150px' height='150px' class="d-block w-100" src="{{ url('storage/servicos/'.$i->arquivo) }}" alt="{{ $s->nome }}">
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
                                <h5 class="card-title">Serviço: {{ $s->nome }}</h5>
                                <p class="card-text">Descrição: {{ $s->descricao }}</p>

                                <p class="card-text">Autonomo: {{ collect(explode(' ', $s->user->name))->slice(0, 3)->implode(' ') }}</p>

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