@extends('app')

@section('titulo')
Cadastro Imagens para serviço
@stop

@section('conteudo')
<h3>Cadastrar imagens para serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('servico/imagem/store') }}" enctype="multipart/form-data">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="servico_id" value="{{ $servico_id }}">
                    
                    <div class="form-group col-md-6"><label for="arquivo">Imagem</label><br>
                        <input type="file" name="arquivo" id="arquivo" multiple="multiple">
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop