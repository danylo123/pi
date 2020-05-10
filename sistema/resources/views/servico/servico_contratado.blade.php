@extends('app')

@section('titulo')
Serviços
@stop

@section('conteudo')

<h3>Serviços contratados</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                <p>
                    @foreach ($servico as $s)                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Serviço: {{ $s->servico->nome }}</h5>
                                <p class="card-text">Tipo: {{ $s->servico->tipo_servico->nome }}</p>
                                <p class="card-text">Autônomo: {{ $s->servico->user->name }}</p>
                                <a href="#" class="btn 
                                @if($s->estado == 'Pendente')
                                btn-warning
                                @elseif($s->estado == 'Aceito')
                                btn-success
                                @elseif($s->estado == 'Finalizado')
                                btn-secondary
                                @elseif($s->estado == 'Cancelado')
                                btn-danger
                                @endif
                                btn-block" data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $s->observacao }}">{{ $s->estado }}</a>
                            </div>
                        </div>
                    </div>                                        
                    @endforeach             
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop