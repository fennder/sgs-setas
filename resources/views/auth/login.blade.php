@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <img src="{{ asset('/imagens/imagem_testa.png') }}" width="100%">
</div>
  <div class="login-logo">
    <a href="{!! route('a.getLogin') !!}"><b>Sistema de Inscrições</b></a>
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

  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4><b><p class="login-box-msg">Já é cadastrado(a)? Faça o login!</p></b></h4>
    <form action="{!! route('a.postLogin') !!}" method="POST">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder=" Digite o seu E-mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Digite a sua Senha">
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
          <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
        </div>
        <!-- /.col -->

      </div>
    </form>

    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12" align="left">
           <a href="{!! route('p.getEmail') !!}" class="btn btn-success btn-block">ESQUECI MINHA SENHA!</a>
        </div>
    </div>

   <br>

    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12" align="rigth">
           <a href="{!! route('a.getRegister') !!}"  class="btn btn-danger btn-block">AINDA NÃO SOU CADASTRADO!</a>
        </div>
    </div>
    
  </div>
  <!-- /.login-box-body -->
</div>
@endsection