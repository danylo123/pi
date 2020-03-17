@extends('app')

@section('titulo')
Cadastro tipo de serviço
@stop

@section('conteudo')
<h3>Cadastrar tipo de serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('tipo_servico/store') }}" enctype="application/x-www-form-urlencoded">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop