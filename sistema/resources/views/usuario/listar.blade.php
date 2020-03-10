@extends('app')

@section('titulo')
Usuários
@stop

@section('conteudo')
<a href="{{ url('/usuario/cadastro') }}" class="btn cur-p btn-primary float-right">Novo</a>
<h3>Usuários</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $u)
                        <tr>
                            <td>{{ $u->cpf }}</td>
                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->email }}</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/usuario/editar/') }}/{{ $u->id }}">Editar</a> 
                                <a class="dropdown-item" href="{{ url('/usuario/excluir/') }}/{{ $u->id }}">Excluir</a></div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop