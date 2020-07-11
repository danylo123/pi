@extends('app')

@section('titulo')
Cadastro usuário
@stop

@section('conteudo')
<h3>Cadastro usuário</h3>
@if(!empty($mensagem))
<div class="alert alert-success">Usuário inserido com sucesso!</div>
@endif
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('usuario/store') }}" enctype="application/x-www-form-urlencoded">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="name" maxlength="30" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="11" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" maxlength="60" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" maxlength="8" name="password" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control phone" id="phone" name="telefone" placeholder="Telefone">
                    </div>                    
                    <div class="form-group col-md-6"><label for="nivel">Nivel de permissão</label>
                        <select class="form-control" id="nivel" name="nivel">
                            <option>Selecione</option>
                            @foreach ($nivel as $n)
                            <option value="{{ $n->id }}">{{ $n->nome }}</option>
                            @endforeach
                        </select>
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