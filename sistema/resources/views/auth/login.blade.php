@extends('website.app')

@section('conteudo')
<div class="container">
    <div class="panel panel-default text-white">
        <div class="panel-heading">
            <h2 class="display-4 text-white">Entrar</h2>
        </div>

        <div class="panel-body d-flex justify-content-center">
            <form class="form-horizontal col-md-6" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    <label for="cpf" class="col-md-4 control-label">CPF</label>

                    <div class="col-lg-12">
                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" maxlength="11" required autofocus>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Senha</label>

                    <div class="col-lg-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>
                @if ($errors->has('cpf'))
                <div class="alert alert-danger">Credênciais inválidas!</div>
                @endif

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembre-me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>

                        <a class="btn btn-link" style="color: red" href="{{ route('password.request') }}" disabled>
                            Esqueceu a senha?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection