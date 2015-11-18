<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGS - SD - GTI - SETAS | Registrar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
  <!-- iCheck -->
  <link href="{{ asset('bower_components/AdminLTE/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <img src="{{ asset('/imagens/logo_estado-150x150.png') }}" class="img-circle" alt="User Image">
    <a href="/auth/register"><b>SGS - </b>SETAS</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar novo usuário</p>

    <form action="/auth/register" method="POST">
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
        <input type="password" class="form-control" name="password" placeholder="Senha">
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
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
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

    <a href="login" class="text-center">Já é usuário clique aqui</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('bower_components/AdminLTE/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>