@extends('app')

@section('titulo')
Editar Usuário
@stop

@section('conteudo')
<h3>Editar Usuário</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">        
        <div class="mT-30">
            <form method="post" action="">
                <div class="form-group"><label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome completo">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="id_sisdm">ID SISDM</label>
                        <input type="number" class="form-control" id="id_sisdm" placeholder="ID SISDM">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-6"><label for="capitulo">Capitulo</label><select id="capitulo" class="form-control">
                            <option selected="selected">Selecione...</option>
                            <option>Capitulo</option>
                        </select></div>

                    <div class="form-group col-md-6"><label for="permissao">Permissão de acesso</label><select id="capitulo" class="form-control">
                            <option selected="selected">Selecione...</option>
                            <option>Capitulo</option>
                        </select></div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop