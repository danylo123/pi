@extends('app')

@section('titulo')
Cadastro Usuário
@stop

@section('conteudo')
<h3>Cadastrar serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('servico/store') }}" enctype="application/x-www-form-urlencoded">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo">
                            <option>Selecione</option>
                            <option value="1">Construção civil</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6"><label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade/Estado">
                    </div>
                    <div class="form-group col-md-12"><label for="descricao">Descrição</label>
                        <textarea name="descricao" class="form-control" id="descricao" name="descricao" cols="20" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-row">

                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop