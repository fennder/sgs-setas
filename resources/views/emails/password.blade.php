<!-- resources/views/emails/password.blade.php -->
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
    
    <!--Click here to reset your password: {{ url('password/reset/'.$token) }}-->

    Click here to reset your password: {{ url('password/reset/'.$token) }}

    <a href="{!! route('a.getLogin') !!}">Tela de login de usuário</a><br>
    <a href="{!! route('a.getRegister') !!}" class="text-center">Tela de registro de usuário</a>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection