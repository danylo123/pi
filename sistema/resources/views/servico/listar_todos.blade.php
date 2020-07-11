@extends('app')

@section('titulo')
Serviços
@stop

@section('conteudo')

<h3>Todos os serviços</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20 table-responsive-sm">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Variação de preço</th>
                            <th>Tipo de serviço</th>
                            <th>Autônomo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servico as $s)
                        <tr>
                            <td>{{ $s->nome }}</td>
                            <td>R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}</td>
                            <td>{{ $s->tipo_servico->nome }}</td>
                            <td>{{ collect(explode(' ', $s->user->name))->slice(0, 3)->implode(' ') }}</td>
                            <td><a href="{{ url('servico/contratar/'.$s->id) }}" class="btn btn-primary btn-block" title="Clique para ver mais detalhes">Detalhar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@stop