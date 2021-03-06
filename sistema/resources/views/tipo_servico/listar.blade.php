@extends('app')

@section('titulo')
Tipo de serviços
@stop

@section('conteudo')
<a href="{{ url('/tipo_servico/cadastro') }}" class="btn cur-p btn-primary float-right">Novo</a>
<h3>Tipo de serviços</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data cadastro</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipo_servico as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->nome }}</td>
                            <td>{{ date( 'd/m/Y H:i' , strtotime($s->created_at))}}</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/tipo_servico/editar/') }}/{{ $s->id }}">Editar</a>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#confirm{{ $s->id }}">Excluir</button></div>
                                <div class="modal fade" id="confirm{{ $s->id }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Deseja realmente excluir <b>{{ $s->nome }}</b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/tipo_servico/excluir/') }}/{{ $s->id }}" type="button" class="btn btn-danger" id="delete">Excluir</a>
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