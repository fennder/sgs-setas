@extends('layout-backend.layout_login')

@section('content')
  <div class="register-box">
    <div class="register-logo">
      <img src="{{ asset('/imagens/imagem_testa.png') }}" width="100%">
    </div>

    <div class="register-logo">
      <a href="register"><b>Sistema de Inscrições</b></a>
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
      <h4><b><p class="login-box-msg">Registrar novo usuário</p></b></h4>

      <form action="register" method="POST">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome Completo">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Digite seu Email">
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
        <div class="form-group has-feedback">
          <input type="hidden" class="form-control" name="dados_atualizados" value="0">
          <input type="hidden" class="form-control" name="id_perfil" value="3">  
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-xs-8" align="left">
            <button type="submit" class="btn btn-primary btn-block text-center">REGISTRAR</button>
          </div>
          <!-- /.col -->
          <div class="col-xs-4" align="right">
            <a href="{!! route('a.getLogin') !!}" class="btn btn-default btn-block text-center">VOLTAR</a>
          </div>
        </div>
        
      </form>      
    </div>
    <!-- /.form-box -->
  </div>
@endsection