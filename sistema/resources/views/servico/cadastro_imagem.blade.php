@extends('app')

@section('titulo')
Cadastro Imagens para serviço
@stop

@section('conteudo')
<h3>Cadastrar imagens para serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30 card col-sm-7">
            <form method="post" action="{{ url('servico/imagem/store') }}" enctype="multipart/form-data">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="servico_id" value="{{ $servico_id }}">

                    <div class="form-group col-md-6"><label for="arquivo">Adicionar imagem</label><br>
                        <input type="file" name="arquivo" id="arquivo" multiple="multiple">
                    </div>
                    <div class="form-group col-sm-6"><label for="arquivo"></label><br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="row">
            @foreach($imagem as $i)​
            <div class="card col-sm-4">
                <img class="rounded" height="230px" src="{{ url('storage/servicos/'.$i->arquivo) }}">
                <div class="card-img-overlay">
                    <a href="{{ url('servico/imagem/destroy/'.$i->id) }}" class="btn" style="background-color: white;" title="Remover imagem"><i class="ti-trash"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@stop