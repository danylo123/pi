@extends('app')

@section('titulo')
Cadastrar novo serviço
@stop

@section('conteudo')
<h3>Cadastrar novo serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('servico/store') }}" enctype="multipart/form-data">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-group col-md-6"><label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option>Selecione</option>
                            @foreach ($tipo_servico as $s)
                            <option value="{{ $s->id }}">{{ $s->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6"><label for="menor_preco">Menor preço</label>
                        <input type="text" class="form-control money2" id="menor_preco" name="menor_preco" value="0.00" required>
                    </div>
                    <div class="form-group col-md-6"><label for="maior_preco">Maior preço</label>
                        <input type="text" class="form-control money2" id="maior_preco" name="maior_preco" value="0.00" required>
                    </div>
                    <div class="form-group col-md-6"><label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" cols="20" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>


@stop