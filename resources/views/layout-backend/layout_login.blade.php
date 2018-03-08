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
      <a href="{{ asset('/documentacao/MANUAL SGI-USUARIO.pdf') }}" target="_blank"><img src="{{ asset('/imagens/MANUAL.png') }}" width="60%"></a>
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
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js") }}"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js") }}"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js") }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>