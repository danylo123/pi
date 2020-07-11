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
                        @if($s->servico->user_id != auth()->user()->id)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">                                    
                                    @if($s->estado != 'Finalizado' && $s->estado != 'Cancelado')
                                    <button type="button" class="btn btn-danger float-right" title="Cancelar contrato" data-toggle="modal" data-target="#{{ $s->id }}">
                                    <i class="c-black-500 ti-close"></i>
                                    </button>
                                    <div class="modal fade" id="{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="cancelar" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{ $s->id }}">Cancelar contrato "{{ $s->servico->nome }}"</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('/servico/cancelar_contrato') }}">
                                                        <div class="form-row">
                                                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                                            <input type="hidden" name="estado" value="Cancelado">
                                                            <input type="hidden" name="id" value="{{ $s->id }}">
                                                            <div class="form-group col-sm-12"><label for="observacao">Informe o motivo do cancelamento:</label>
                                                                <textarea class="form-control" id="observacao" name="observacao" required></textarea>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif                                    
                                    <h5 class="card-title">Serviço: {{ $s->servico->nome }}</h5>
                                    @if($s->estado == 'Aceito')
                                    <a href="{{ url('/chat/'.$s->id.'/servico') }}" class="btn btn-secondary float-right" title="Mensagens"><i class="ti-email mR-10"></i> <span class="badge badge-light">~</span></a>
                                    @endif
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
                        @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop