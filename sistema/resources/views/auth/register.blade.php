@extends('website.app')

@section('conteudo')

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-heading">
            <h2 class="display-4">Cadastre-se</h2>
        </div>
    </div>

    <div class="panel-body d-flex justify-content-center">
        <form class="form-horizontal col-md-8" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nome</label>
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                <label for="cpf" class="col-md-4 control-label">CPF</label>

                <div class="col-lg-12">
                    <input id="cpf" type="text" class="form-control cpf" name="cpf" value="{{ old('cpf') }}" required>

                    @if ($errors->has('cpf'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                <label for="telefone" class="col-md-4 control-label">Telefone</label>

                <div class="col-md-12">
                    <input id="telefone" type="text" class="form-control phone" name="telefone" maxlength="11" value="{{ old('telefone') }}" required>

                    @if ($errors->has('telefone'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('telefone') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-12 control-label">Confirme a senha</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection