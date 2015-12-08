@extends('layout-backend.layout_login')

@section('content')
  <div class="register-box">
    <div class="register-logo">
      <img src="{{ asset("/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image">
    </div>
    <div class="register-logo">
      <a href="{!! route('a.getRegister') !!}"><b>SGS - </b>SETAS</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Registrar novo usuário</p>

      <form action="{!! route('a.postRegister') !!}" method="POST">
      {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome Completo">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
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
              <label>
                <input type="checkbox"> Aceite os <a href="#">termos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Cadasatrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
          Google+</a>
      </div-->

      <a href="{!! route('a.getLogin') !!}" class="text-center">Já é usuário clique aqui</a>
    </div>
    <!-- /.form-box -->
  </div>
@endsection