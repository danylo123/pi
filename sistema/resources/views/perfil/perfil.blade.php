@extends('app')

@section('titulo')
Perfil
@stop

@section('conteudo')
<h1>Meu perfil</h1>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="">

                <div class="form-row">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" value="{{ auth()->user()->name }}" disabled placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="cpf">CPF</label>
                        <input type="number" class="form-control" id="cpf" value="{{ auth()->user()->cpf }}" disabled placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6"><label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" value="{{ auth()->user()->telefone }}" disabled placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6"><label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" disabled placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group">
                </div><a href="{{ url('/perfil/editar') }}" class="btn btn-primary">Editar</a>
            </form>
        </div>
    </div>
</div>

@stop