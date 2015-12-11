@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <img src="{{ asset("/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image">
  </div>
  <div class="login-logo">
    <a href="{!! route('a.getLogin') !!}"><b>SGS - </b>SETAS</a>
  </div>

  <!-- ERROS -->
  @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <!-- ERROS -->

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça o login para iniciar</p>
    <form action="{!! route('a.postLogin') !!}" method="POST">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Lembre-me
            </label>
          </div>
        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->

      </div>
    </form>
  
    <!--div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div-->
    <!-- /.social-auth-links -->

    <a href="#">Esqueci minha senha</a><br>
    <a href="{!! route('a.getRegister') !!}" class="text-center">Registrar novo usuário</a>

  </div>
  <!-- /.login-box-body -->
</div>
@endsection