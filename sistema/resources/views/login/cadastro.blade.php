@extends('app')

@section('titulo')
Cadastro
@stop

@section('conteudo')
<h3>Cadastro</h3>
@if(!empty($mensagem))
<div class="alert alert-success">Seu cadastro foi realizado com sucesso!</div>
@endif
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('usuario/store') }}" enctype="application/x-www-form-urlencoded">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" maxlength="30" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="11" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" maxlength="60" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" maxlength="8" name="senha" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control phone" id="phone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" maxlength="25" name="rua" placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" maxlength="5" name="numero" placeholder="Número">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" maxlength="20" name="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6"><label for="nivel">Deseja ser?</label>
                        <input class="form control" type="radio" name="nivel" id="nivel" value="2" checked>
                        <label for="nivel">
                            Contratante
                        </label>
                        <input class="form control" type="radio" name="nivel" id="nivel" value="3">
                        <label for="nivel">
                            Autônomo
                        </label>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="form-group">
</div><button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
</div>
</div>


@stop