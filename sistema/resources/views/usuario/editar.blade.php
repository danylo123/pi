@extends('app')

@section('titulo')
Editar usuário
@stop

@section('conteudo')
<h3>Editar usuário</h3>
@if(!empty($mensagem))
<div class="alert alert-success">Usuário inserido com sucesso!</div>
@endif
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('usuario/alterar') }}" enctype="application/x-www-form-urlencoded">
                @foreach ($usuario as $u)

                <div class="form-row">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" maxlength="30" value="{{ $u->nome }}" placeholder="Nome">
                    </div>
                    <input type="hidden" id="id" name="id" class="form-control" required value="{{ $u->id }}">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" value="{{ $u->cpf }}" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" maxlength="60" value="{{ $u->email }}" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" maxlength="8" value="{{ $u->senha }}" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control phone" id="telefone" name="telefone" value="{{ $u->telefone }}" placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" maxlength="25" value="{{ $u->rua }}" placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="{{ $u->numero }}" placeholder="Número">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" maxlength="20" value="{{ $u->bairro }}" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6"><label for="nivel">Nivel de permissão</label>
                        <select class="form-control" id="nivel" name="nivel">
                            @foreach ($nivel as $n)
                            <option value="{{ $n->id }}" @if($n->id == $u->nivel_id) selected @endif>{{ $n->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endforeach
                <div class="form-row">

                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop