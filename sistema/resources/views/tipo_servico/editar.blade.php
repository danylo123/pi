@extends('app')

@section('titulo')
Editar tipo serviço
@stop

@section('conteudo')
<h3>Editar tipo de serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('tipo_servico/alterar') }}" enctype="application/x-www-form-urlencoded">
                @foreach ($tipo_servico as $s)
                <input type="hidden" id="id" name="id" class="form-control" required value="{{ $s->id }}">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" value="{{ $s->nome }}" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-3"><label for="data_cadastro">Data cadastro</label>
                        <input type="text" class="form-control" id="data_cadastro" disabled value="{{ date( 'd/m/Y H:i' , strtotime($s->created_at))}}" name="data_cadastro">
                    </div>
                    <div class="form-group col-md-3"><label for="data_cadastro">Data última atualização</label>
                        <input type="text" class="form-control" id="data_cadastro" disabled value="{{ date( 'd/m/Y H:i' , strtotime($s->updated_at))}}" name="data_cadastro">
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
                @endforeach
            </form>
        </div>
    </div>
</div>


@stop