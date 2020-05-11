@extends('app')

@section('titulo')
Serviços
@stop

@section('conteudo')
<a href="{{ url('/servico/cadastro') }}" class="btn cur-p btn-primary float-right">Novo</a> 

<h3>Meus serviços</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">            
                <div class="row">
                    @if($servico == null)
                    <p>Você não possui nenhum serviços cadastrado.</p>
                    @endif
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
                                <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item btn-block" href="{{ url('/servico/editar/') }}/{{ $s->id }}">Editar</a>
                                    <button type="button" class="dropdown-item btn-block" data-toggle="modal" data-target="#confirm{{ $s->id }}">Excluir</button></div>
                                <div class="modal fade" id="confirm{{ $s->id }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Deseja realmente excluir <b>{{ $s->nome }}</b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/servico/excluir/') }}/{{ $s->id }}" type="button" class="btn btn-danger" id="delete">Excluir</a>
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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