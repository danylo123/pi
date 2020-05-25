@extends('app')

@section('titulo')
Ouvidoria
@stop

@section('conteudo')
<h1>Ouvidoria</h1>
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('ouvidoria/store') }}">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group col-md-12"><label for="assunto">Assunto</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                    </div>
                    <div class="form-group col-md-12"><label for="observacao">Observação</label>
                        <textarea class="form-control" id="observacao" name="observacao" cols="20" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>


@stop