@extends('app')

@section('titulo')
Perfil
@stop

@section('conteudo')
<h1>Meu perfil</h1>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('perfil/perfilEditar') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="name" required value="{{ auth()->user()->name }}" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" required value="{{ auth()->user()->cpf }}" placeholder="CPF">
                    </div>                    
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control phone" id="telefone" name="telefone" required value="{{ auth()->user()->telefone }}" placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ auth()->user()->email }}" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="password" placeholder="Senha">
                    </div>

                    <div class="form-group col-md-6"><label for="imagem">Foto</label>
                        <input type="file" class="form-control" id="imagem" name="imagem">
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div>

@stop