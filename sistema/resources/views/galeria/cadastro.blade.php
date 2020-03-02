@extends('app')

@section('titulo')
Cadastro Galeria
@stop

@section('conteudo')
<h3>Cadastro Galeria</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">        
        <div class="mT-30">
            <form method="post" action="">
                <div class="form-group"><label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome completo">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="cargo">Cargo</label>
                        <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                    </div>
                    <div class="form-group col-md-6"><label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto">
                    </div>
                </div>
                <div class="form-row">                    
                    <div class="form-group col-md-6"><label for="tipo">Tipo</label><select id="tipo" class="form-control">
                            <option selected="selected">Selecione...</option>
                            <option>Capitulo</option>
                        </select></div>

                        <div class="form-group col-md-6"><label for="gestao">Gestão</label><select id="gestao" class="form-control">
                            <option selected="selected">Selecione...</option>
                            <option>2010.1</option>
                        </select></div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop