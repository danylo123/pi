@extends('app')

@section('titulo')
Serviços
@stop

@section('conteudo')
<a href="{{ url('/servico/cadastro') }}" class="btn cur-p btn-primary float-right">Novo</a>
<h3>Serviços</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Cidade</th>
                            <th>Ação</th>
                        </tr>
                    </thead>                    
                    <tbody>
                        @foreach ($servico as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->nome }}</td>
                            <td>{{ $s->tipo_nome }}</td>
                            <td>{{ $s->cidade }}</td>
                            <td><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ url('/servico/editar/12') }}">Editar</a> <a class="dropdown-item" href="#">Excluir</a></div>
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