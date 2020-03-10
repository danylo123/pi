@extends('app')

@section('titulo')
Editar usuário
@stop

@section('conteudo')
<h3>Editar usuário</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('usuario/alterar') }}" enctype="application/x-www-form-urlencoded">
                @foreach ($usuario as $u)
                <div class="form-group"><label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $u->nome }}" placeholder="Nome">
                </div>
                <input type="hidden" id="id" name="id" class="form-control" required value="{{ $u->id }}">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="number" class="form-control" id="cpf" name="cpf" value="{{ $u->cpf }}" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $u->email }}" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" value="{{ $u->senha }}" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $u->telefone }}" placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" value="{{ $u->rua }}" placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ $u->numero }}" placeholder="Número">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $u->bairro }}" placeholder="Bairro">
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