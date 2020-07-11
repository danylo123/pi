@extends('app')

@section('titulo')
Ouvidoria
@stop

@section('conteudo')
@foreach ($ouvidoria as $o)
<h1>Chamado #{{ $o->id }}</h1>
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post">
                <div class="form-row">
                    <div class="col-md-3">
                        <label><b>Usuário:</b> {{ $o->user->name }}</label>
                    </div>
                    <div class="col-md-3">
                        <label><b>Estato:</b> {{ $o->estado }}</label>
                    </div>
                    <div class="col-md-3">
                        <label><b>Aberto em:</b> {{ date_format($o->created_at, "d/m/Y H:i:s") }}</label>
                    </div>
                    @if($o->estado == "Concluido")
                    <div class="col-md-3">
                        <label><b>Concluído em:</b> {{ date_format($o->updated_at, "d/m/Y H:i:s") }}</label>
                    </div>
                    @endif
                    <div class="form-group col-md-12"><label for="assunto"><b>Assunto</b></label>
                        <input type="text" class="form-control" readonly value="{{ $o->assunto }}" id="assunto" name="assunto" placeholder="Assunto" required>
                    </div>
                    <div class="form-group col-md-12"><label for="observacao"><b>Observação</b></label>
                        <textarea class="form-control" id="observacao" readonly cols="10" rows="5" required>{{ $o->observacao }}</textarea>
                    </div>
                    @if($o->estado == "Concluido")
                    <div class="form-group col-md-12"><label for="observacao"><b>Resposta</b></label>
                        <textarea class="form-control" id="observacao" readonly cols="10" rows="5" required>{{ $o->resposta }}</textarea>
                    </div>
                    @endif
            </form>
            @if($o->estado != "Concluido")
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#confirm{{ $o->id }}">Responder</button>
            <div class="modal fade" id="confirm{{ $o->id }}" role="dialog">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="post" action="{{ url('ouvidoria/chamado/resposta/update') }}">
                                <div class="form-row">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                    <input type="hidden" name="id" value="{{ $o->id }}">
                                    <div class="form-group col-md-12"><label for="resposta">Resposta</label>
                                        <textarea class="form-control" id="resposta" name="resposta" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12"><label for="resposta">Estado</label>
                                        <select class="form-control" id="estado" name="estado" required>
                                            <option value="Concluido">Concluido</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div><button type="submit" class="btn btn-primary">Enviar</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach

@stop