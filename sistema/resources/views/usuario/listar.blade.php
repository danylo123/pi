@extends('app')

@section('titulo')
Listar usuários
@stop

@section('conteudo')
<h3>Listar usuários</h3>

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
                    <tfoot>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ação</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>111.222.333-45</td>
                            <td>João da Silva</td>
                            <td>joao_silva@gmail.com</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/usuario/editar/12') }}">Editar</a> <a class="dropdown-item" href="#">Excluir</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td>111.222.333-45</td>
                            <td>João da Silva</td>
                            <td>joao_silva@gmail.com</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/usuario/editar/12') }}">Editar</a> <a class="dropdown-item" href="#">Excluir</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td>111.222.333-45</td>
                            <td>João da Silva</td>
                            <td>joao_silva@gmail.com</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/usuario/editar/12') }}">Editar</a> <a class="dropdown-item" href="#">Excluir</a></div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop