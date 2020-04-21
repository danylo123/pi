@extends('app')

@section('titulo')
Contratar serviço
@stop

@section('conteudo')
<h3>Contratar serviço</h3>

<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            @foreach($servico as $s)
            <p>{{ $s->user->name }}</p>
            <p>{{ $s->nome }}</p>
            <p>{{ $s->nome }}</p>
            @endforeach
            <form method="post" action="{{ url('servico/contratar/store') }}">
                <div class="form-row">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="servico_id" value="">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>
                <div class="form-group">
                </div><button type="submit" class="btn btn-primary">Contratar</button>
            </form>
        </div>
    </div>
</div>


@stop