@extends('app')

@section('titulo')
Meus serviços
@stop

@section('conteudo')
<a href="{{ url('/servico/cadastro') }}" class="btn cur-p btn-primary float-right">Novo</a>

<h3>Meus serviços</h3>


<div class="container-fluid">
    <div class="row">
       
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Variação de preço</th>
                            <th>Tipo de serviço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servico as $s)
                        <tr>
                            <td>{{ $s->nome }}</td>
                            <td>R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}</td>
                            <td>{{ $s->tipo_servico->nome }}</td>
                            <td><button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item btn-block" href="{{ url('/servico/editar/') }}/{{ $s->id }}">Editar</a>
                                    <button type="button" class="dropdown-item btn-block" data-toggle="modal" data-target="#confirm{{ $s->id }}">Excluir</button></div>
                                <div class="modal fade" id="confirm{{ $s->id }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Deseja realmente excluir <b>{{ $s->nome }}</b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/servico/excluir/') }}/{{ $s->id }}" type="button" class="btn btn-danger" id="delete">Excluir</a>
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