@extends('app')

@section('titulo')
Ouvidoria
@stop

@section('conteudo')
<h1>Administrar chamados ouvidoria</h1>
<div class="masonry-item col-md-12">

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20 table-responsive-sm">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Cód.</th>
                            <th>Assunto</th>
                            <th>Usuário</th>
                            <th>Estado</th>
                            <th>Ultima mudança</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ouvidoria as $o)
                        <tr>
                            <td>#{{ $o->id }}</td>
                            <td>{{ $o->assunto }}</td>
                            <td>{{ $o->user->name }}</td>
                            <td>
                                @if($o->estado == "Concluido")
                                <span class="badge badge-success" title="{{ date_format($o->updated_at, 'd/m/Y H:i:s') }}">
                                    {{ $o->estado }}
                                </span>
                                @else
                                <span class="badge badge-warning" title="{{ date_format($o->updated_at, 'd/m/Y H:i:s') }}">
                                    {{ $o->estado }}
                                </span>
                                @endif
                            </td>                            
                            <td><a href="{{ url('ouvidoria/chamado/'.$o->id) }}" class="btn btn-primary btn-block" title="Clique para ver mais detalhes">Destalhar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@stop