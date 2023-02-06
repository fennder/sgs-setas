<!-- resources/views/emails/password.blade.php -->
@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <!-- <img src="{{ asset("http://sgs.setas.to.gov.br/public/imagens/logo_estado-150x150.png") }}" class="img-circle" alt="User Image"> -->
  </div>
  <div class="login-logo">
    <!--a href="#"><b>SGS - </b>SETAS</a-->
    <center><b>Sistema de Gerenciamento de Inscrição - </b>Secretaria  do Trabalho e Assistência Social</center>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>REDEFINIÇÃO DE SENHA</b></p>
    
    <!--Click here to reset your password: {{ url('password/reset/'.$token) }}-->

    Clique no link abaixo para redefinir sua senha ou copie e cole o link no seu navegador {{ url('password/reset/'.$token) }}</p>

    <p><b>Atenção:</b> O acesso ao link acima apresentado só será permitido, até 3 horas após a realização do seu pedido apresentado neste e-mail. Caso V.Sa. perca o prazo de validade do mesmo, queira repetir o procedimento de recuperação de senha.</br> 

<p>Atenciosamente,</p>
<p>SD-GTI-SETAS</p>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection