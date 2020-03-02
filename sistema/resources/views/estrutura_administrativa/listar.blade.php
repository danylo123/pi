@extends('app')

@section('titulo')
Listar Estrutura Administrativa
@stop

@section('conteudo')
<h3>Listar Estrutura Administrativa</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">                
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Capitulo</th>
                            <th>Cidade</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Capitulo</th>
                            <th>Cidade</th>
                            <th>Ação</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Editar</a> <a class="dropdown-item" href="#">Excluir</a></div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop