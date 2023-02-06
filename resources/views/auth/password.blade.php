@extends('layout-backend.layout_login')

@section('content')
<div class="login-box">
<div class="login-logo">
  <img src="{{ asset('/imagens/imagem_testa.png') }}" width="100%">
  </div>
  <div class="login-logo">
    <a href="{!! route('p.getEmail') !!}"><b>Sistema de Inscrições</b></a>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4>
      <b><p class="login-box-msg">Digite aqui o seu e-mail!</p></b>
    </h4>
    <h3>
      <p class="login-box-msg">O link para refazer a senha, será enviado para o seu e-mail!</p>
    </h3>

    <form action="{!! route('p.postEmail') !!}" method="POST">
    {{ csrf_field() }}
    
    <!-- ERROS -->
    @if (count($errors) > 0)
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opa!</strong> Veja abaixo o que deu de errado!<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <!-- ERROS -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Digite o seu Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-8" align="text-center">

          <!-- Trigger the modal with a button -->
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">RECUPERAR SENHA</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog" align="text-center">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title">QUASE LÁ! FOI ENVIADO O LINK NO E-MAIL!</h2>
                </div>
                <div class="modal-body" align="text-center">
                  <a href="#">
                    <img src="{{ asset('/imagens/enviada.gif') }}" width="70%">
                  </a>
                  <p><center><h3><b>Clique ou copie o link que chegará no seu e-mail.</b></h3></center></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
              
            </div>
          </div><!-- Modal -->

        </div>
        <!-- /.col -->
        <div class="col-xs-4" align="right">
          <a  href="{!! route('a.getLogin') !!}" class="btn btn-default ">VOLTAR</a>
        </div>
      </div>

    </form>

    <!-- <a href="{!! route('a.getLogin') !!}" class="text-center"><h3 style="color:blue">Tela de login</h3></a>
    <a href="{!! route('a.getRegister') !!}" class="text-center"><h3 style="color:blue">Tela de registro de usuário</h3></a> -->
  </div>
  <!-- /.login-box-body -->
</div>

@endsection