@extends('app')

@section('titulo')
Login
@stop

@section('conteudo')

<div class="peers ai-s fxw-nw h-80vh">
    <div class="col-6 col-md-6 peer pX-60 pY-60 h-70 bgc-white" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
        <form method="POST" action="">
            <div class="form-group"><label class="text-normal text-dark">CPF</label><input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="11" placeholder="CPF"></div>
            <div class="form-group"><label class="text-normal text-dark">Senha</label><input type="password" class="form-control" placeholder="Senha"></div>
            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer"><button class="btn btn-primary">Entrar</button></div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop