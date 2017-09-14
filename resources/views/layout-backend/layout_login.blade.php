<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGS-SD-GTI-SETAS</title>
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
<body class="hold-transition register-page"></br>

  <div class="row">
    <div class="col-md-3" align="center">
      <a href="{{ asset('/documentacao/MANUAL SGI-USUARIO.pdf') }}" target="_blank"><img src="{{ asset('/imagens/MANUAL.png') }}" width="70%"></a>
    </div>
    <div class="col-md-6">
     
    </div>
    <div class="col-md-3">
      
    </div>
  </div>

  <div class="row">
    <div class="col-md-3" align="center">
     
    </div>
    <div class="col-md-6">
      @yield('content')
    </div>
    <div class="col-md-3">
      
    </div>
  </div>
  
<!-- /.register-box -->
  <div class="row">
    
    <div class="col-md-12" align="center">
      <!-- Default box -->
      <div>
        <strong>

        <!-- Copyright -->Direitos reservados &copy; 2016 - 2017
        <a href="http://opensetas.setas.to.gov.br/portal">
           SD-GTI 
        </a>
        da Secretaria do Trabalho e Assistência Social
      </strong>
        <div class="box-header with-border">
          <div align="center">
            <a href="https://www.ubuntu.com/" target="_blank"><i class="ion ion-social-tux"></i></a>
            <a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank"><i class="ion ion-social-chrome"></i></a>
            <a href="https://about.gitlab.com/" target="_blank"><i class="ion ion-social-github"></i></a>
            <a href="https://laravel.com/" target="_blank"><img src="{{ asset('/imagens/laravel.png') }}" width="1.1%"></a>
          </div>
        </div>
        
      </div><!-- /.box -->
    </div><!-- Col 12 -->

  </div> <!-- Row -->

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