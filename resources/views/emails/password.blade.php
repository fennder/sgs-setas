<!-- resources/views/emails/password.blade.php -->
@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <!--img src="{{ asset("/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image"-->
  </div>
  <div class="login-logo">
    <a href="#"><b>SGS - </b>SETAS</a>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Resetar senha</p>
    
    <!--Click here to reset your password: {{ url('password/reset/'.$token) }}-->

    Clique para resetar sua senha: {!! url('password/reset/'.$token) !!}

    <p></p>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection