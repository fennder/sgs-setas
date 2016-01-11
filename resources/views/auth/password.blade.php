@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <img src="{{ asset("/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image">
  </div>
  <div class="login-logo">
    <a href="{!! route('p.getEmail') !!}"><b>SGS - </b>SETAS</a>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça o login para iniciar</p>
    <form action="{!! route('p.postEmail') !!}" method="POST">
    {{ csrf_field() }}
    
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
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12" align="right">
          <button type="submit" class="btn btn-primary "> Enviar link e reseta senha</button>
        </div>
        <!-- /.col -->

      </div>
    </form>

    <a href="{!! route('a.getLogin') !!}">Tela de login de usuário</a><br>
    <a href="{!! route('a.getRegister') !!}" class="text-center">Tela de registro de usuário</a>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection