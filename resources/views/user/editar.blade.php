@extends('layout-backend.admin_template')

@section('content')
  <div class="register-box">
    
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
      <p class="login-box-msg">Alterar usuário</p>

      <form action="/users/atualizar/{{ $users->id }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="name" value="{{ $users->name }}" placeholder="Nome Completo">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" value="{{ $users->email }}" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div>
@endsection