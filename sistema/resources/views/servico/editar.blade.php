@extends('app')

@section('titulo')
Editar serviço
@stop

@section('conteudo')
<h3>Editar serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('servico/alterar') }}" enctype="application/x-www-form-urlencoded">
                @foreach ($servico as $s)
                <input type="hidden" id="id" name="id" class="form-control" required value="{{ $s->id }}">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" value="{{ $s->nome }}" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="tipo">Categoria do serviço</label>
                        <select class="form-control" id="tipo" name="tipo">                            
                            @foreach ($tipo_servico as $ts)                                
                            <option value="{{ $ts->id }}" @if($ts->id == $s->tipo_servico_id) selected @endif>{{ $ts->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" value="{{ $s->rua }}" name="rua" placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ $s->numero }}" placeholder="Número">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $s->bairro }}" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6"><label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $s->cidade }}" placeholder="Cidade/Estado">
                    </div>
                    <div class="form-group col-md-12"><label for="descricao">Descrição</label>
                        <textarea name="descricao" class="form-control" id="descricao" name="descricao" cols="20" rows="10">{{ $s->descricao }}</textarea>
                    </div>
                </div>
                <div class="form-row">

                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
                @endforeach
            </form>
        </div>
    </div>
</div>


@stop