<!-- resources/views/auth/reset.blade.php -->
@extends('layout-backend.layout_login')

@section('content')
  <div class="register-box">
    <div class="register-logo">
      <img src="{{ asset("/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image">
    </div>

    <div class="register-logo">
      <a href="{!! route('a.getRegister') !!}"><b>SGS - </b>SETAS</a>
    </div>

    <!-- ERROS -->
    @if (count($errors) > 0)
      <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opa!</strong> Existem campos obrigatórios em branco.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <!-- ERROS -->

    <div class="register-box-body">
      <p class="login-box-msg">Redefina sua senha, por favor!</p>

      <form action="{!! route('p.postReset') !!}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Senha, mínimo 6">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Repita a senha">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <!--label>
                <input type="checkbox"> Aceite os <a href="#">termos</a>
              </label-->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Refazer</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{!! route('a.getLogin') !!}" class="text-center">Já é usuário clique aqui</a>
    </div>
    <!-- /.form-box -->
  </div>


<!-- resources/views/auth/reset.blade.php -->

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>
  
@endsection