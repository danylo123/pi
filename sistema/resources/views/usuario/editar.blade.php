@extends('app')

@section('titulo')
Editar usuário
@stop

@section('conteudo')
<h3>Editar usuário</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="">
                @foreach ($usuario as $u)
                <div class="form-group"><label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" value="{{ $u->nome }}" placeholder="Nome">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="number" class="form-control" id="cpf" value="{{ $u->cpf }}" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" value="{{ $u->email }}" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
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