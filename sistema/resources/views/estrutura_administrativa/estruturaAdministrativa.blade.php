@extends('app')

@section('titulo')
Estrutura Administrativa
@stop

@section('conteudo')
<h3>Estrutura Administrativa</h3>

<div class="masonry-item w-100">
    <div class="row gap-20">
        <div class="col-md-3">
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer"><img src="{{Storage::url("mvc/storage/app/public/estrutura_administrativa/user.jpg")}}"></div>
                    </div>
                </div>
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">{{ $row['nome'] }}</h6>
                    <h6 class="lh-1">{{ $row['cargo'] }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>



@stop