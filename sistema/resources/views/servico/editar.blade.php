@extends('app')

@section('titulo')
Editar serviço
@stop

@section('conteudo')
<h3>Editar serviço</h3>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif
<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <form method="post" action="{{ url('servico/alterar') }}" enctype="multipart/form-data">
                @foreach ($servico as $s)
                <input type="hidden" id="id" name="id" class="form-control" required value="{{ $s->id }}">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="form-group col-md-6"><label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" value="{{ $s->nome }}" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6"><label for="tipo_servico_id">Categoria do serviço</label>
                        <select class="form-control" id="tipo_servico_id" name="tipo_servico_id">                            
                            @foreach ($tipo_servico as $ts)                                
                            <option value="{{ $ts->id }}" @if($ts->id == $s->tipo_servico_id) selected @endif>{{ $ts->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6"><label for="menor_preco">Menor preço</label>
                        <input type="text" class="form-control money2" id="menor_preco" name="menor_preco" value="{{ $s->menor_preco }}">
                    </div>
                    <div class="form-group col-md-6"><label for="maior_preco">Maior preço</label>
                        <input type="text" class="form-control money2" id="maior_preco" name="maior_preco" value="{{ $s->maior_preco }}">
                    </div>                    
                    <div class="form-group col-md-6"><label for="descricao">Descrição</label>
                        <textarea name="descricao" class="form-control" id="descricao" cols="20" rows="10">{{ $s->descricao }}</textarea>
                    </div>
                    <div class="form-group col-md-6"><label for="imagem">Imagem</label>
                        <br>
                        <a href="{{ url('servico/'.$s->id.'/imagem') }}" class="btn btn-primary">Adicionar imagens</a>
                    </div>
                </div>                
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Salvar</button>
                @endforeach
            </form>
        </div>
    </div>
</div>


@stop