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
                            <th>Estado</th>
                            <th>Resposta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ouvidoria as $o)
                        <tr>
                            <td>#{{ $o->id }}</td>
                            <td>{{ $o->assunto }}</td>
                            <td>{{ $o->estado }}</td>
                            <td>@if($o->resposta == null)
                                Sem resposta
                                @else
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirm{{ $o->id }}">Visualizar</button>
                                <div class="modal fade" id="confirm{{ $o->id }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="form-group "><label for="resposta">Resposta</label>
                                                    <textarea class="form-control" readonly id="resposta" name="resposta" required>{{ $o->resposta }} em: {{ date_format($o->updated_at, "d/m/Y H:i:s") }}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
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