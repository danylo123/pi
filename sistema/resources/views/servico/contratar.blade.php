@extends('app')

@section('titulo')
Contratar serviço
@stop

@section('conteudo')
<h3>Contratar serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <div class="row">
                @foreach ($servico as $s)
                <div class="col-md-5">
                    <div id="carouselExampleIndicators{{ $s->id }}" class="carousel slide card-img-top" data-ride="carousel">
                        <ol class="carousel-indicators">

                            @foreach( $s->arquivo as $photo )
                            <li data-target="#carouselExampleIndicators{{ $s->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner">
                            @foreach( $s->arquivo as $i )
                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                <img class="d-block w-100 col-md-12" height="300px" src="{{ url('storage/servicos/'.$i->arquivo) }}" alt="{{ $s->nome }}">
                            </div>

                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $s->id }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators{{ $s->id }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Serviço: {{ $s->nome }}</h5>
                    <p class="card-text">Categoria: {{ $s->tipo_servico->nome }}</p>
                    <p class="card-text">Descrição: {{ $s->descricao }}</p>
                    <p class="card-text">Variação de preço: R${{ $s->menor_preco }} e R${{ $s->maior_preco }}</p>
                    <p class="card-text">Autonomo: {{ $s->user->name }}</p>
                    <form method="post" action="{{ url('servico/contratar/store') }}">
                        <div class="form-row">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                            @foreach($servico as $s)
                            <input type="hidden" name="servico_id" value="{{ $s->id }}">
                            @endforeach
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        </div>
                        <div class="form-group">
                        </div><button type="submit" class="btn btn-primary">Solicitar orçamento</button>
                    </form>

                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>


@stop