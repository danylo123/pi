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
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/usuario/editar/') }}/{{ $u->id }}">Editar</a>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#confirm{{ $u->id }}">Excluir</button></div>
                                <div class="modal fade" id="confirm{{ $u->id }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Deseja realmente excluir <b>{{ $u->nome }}</b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/usuario/excluir/') }}/{{ $u->id }}" type="button" class="btn btn-danger" id="delete">Excluir</a>
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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