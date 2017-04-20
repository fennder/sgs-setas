@extends('layout-backend.admin_template')

@section('content')
	
	<h4>
    <small>
  		Bem  
      @if($usuarios->sexo == "Feminino")
        vinda Senhora
      @else
        vindo Senhor
      @endif
    </small>
    <b>{{ $usuarios->name or "Servidor"}}</b>, 
		<small class="text-muted">você está na <b>{{$lotacao or "SETAS"}}</b>.</small>
	</h4>
  @if($usuarios->perfil->id_perfil <= 2)
  	
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$cont_curso}}</h3>
            <p>CURSOS</p>
          </div>
          <div class="icon">
            <i class="ion ion-university"></i>
          </div>
          <a href="{{ route('cs.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-md-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$cont_user}}<!-- <sup style="font-size: 20px">%</sup> --></h3>
            <p>USUÁRIOS</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-people-outline"></i>
          </div>
          <a href="{{ route('u.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-md-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$cont_ins}}</h3>
            <p>INSCRIÇÕES</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-compose-outline"></i>
          </div>
          <a href="{{ route('ins.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      
      <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- small box -->
        <!-- <div class="small-box bg-red">
          <div class="inner">
            
            <h3>{{$cont_reg}}</h3>
            
            <p>RELATÓRIOS</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#SETAS-Link será colocado depois" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div> -->
      <!-- ./col -->
    </div>
    <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>

              <h3 class="box-title">Alerts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                Info alert preview. This alert is dismissable.
              </div>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Warning alert preview. This alert is dismissable.
              </div>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Success alert preview. This alert is dismissable.
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
        
  @endif
@endsection