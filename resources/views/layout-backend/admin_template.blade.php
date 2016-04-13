<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Sistema de Gerenciamento de Inscrições - SGI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css") }}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- iCheck -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/flat/blue.css") }}" rel="stylesheet" type="text/css" >
  <!-- Morris chart -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/morris/morris.css") }}" rel="stylesheet" type="text/css" >
  <!-- jvectormap -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}" rel="stylesheet" type="text/css" >
  <!-- Date Picker -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css") }}" rel="stylesheet" type="text/css" >
  <!-- Daterange picker -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css") }}" rel="stylesheet" type="text/css" >
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript">
     function mascara(t, mask){
       var i = t.value.length;
       var saida = mask.substring(1,0);
       var texto = mask.substring(i)
      if (texto.substring(0,1) != saida){
        t.value += texto.substring(0,1);
      }
      }
  </script>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header -->
  @include('layout-backend.header')
  
  <!-- Sidebar -->
  @include('layout-backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page_title or "SGS" }}
        <small>{{ $page_description or "Sistema de Gerenciamento de Inscrições" }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{!! route('h.index') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{ $nav or "Here" }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      @yield('content')


    </section>

    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layout-backend.footer')

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- AdminLTE App -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/morris/morris.min.js") }}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js") }}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/knob/jquery.knob.js") }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript"></script>
<!-- datepicker -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/pages/dashboard.js") }}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}"></script>
<!-- InputMask -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js") }}"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js") }}"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js") }}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<!-- Morris.js charts -->
<!-- AdminLTE for demo purposes -->
<!--script src="{{ asset("/bower_components/AdminLTE/dist/js/demo.js") }}" type="text/javascript"></script-->
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
@yield('post-script')
</body>
</html>