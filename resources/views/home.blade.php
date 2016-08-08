@extends('layout-backend.admin_template')

@section('content')
	
	
	<h4>
		Bem vindo(a), Sr(a) <b>{{ $usuarios->name or "Servidor"}}</b>, 
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
            <h3>0</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div> -->
      <!-- ./col -->
    </div>
    <!-- /.row -->
  @endif
@endsection