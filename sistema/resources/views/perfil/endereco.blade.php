@extends('app')

@section('titulo')
Perfil endereço
@stop

@section('conteudo')
<h1>Endereço</h1>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('perfil/endereco/store') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                <div class="form-row">
                    @foreach($endereco as $e)
                    <div class="form-group col-md-6"><label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" value="{{ $e->rua }}" required placeholder="Rua">
                    </div>
                    <div class="form-group col-md-6"><label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ $e->numero }}" required placeholder="numero">
                    </div>
                    <div class="form-group col-md-6"><label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $e->bairro }}" required placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6"><label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $e->cidade }}" required placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-6"><label for="estado">Estado / UF</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="{{ $e->estado }}" placeholder="Estado">
                    </div>
                    @endforeach
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div>

@stop