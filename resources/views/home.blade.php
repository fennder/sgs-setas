@extends('layout-backend.admin_template')

@section('content')
	
	<h4>
    <small>
  		Bem  
      @if($usuarios->sexo == "Feminino")
        Vinda Senhora
      @else
        Vindo Senhor
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
              <h3 class="box-title">Aviso</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Aviso!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div> -->
              <!--<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                O sistema está passando por uma leve instabilidade, cajo haja funcionalidades que não podem ser usadas, favor entrar em contato.</br>
                Setor de Desenvolvimento pelo Chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, informando qual ação deseja fazer.</br>
                Caso o atendimento seja fora da estrutura da SETAS favor entrar em contato (63) 3218-1951.
              </div>-->
              <!-- <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Aviso!</h4>
                  O SGI estará fora ar no período de 28 de abril à 02 de maio, em face de uma manutenção preventiva e suas funcionalidades estarão todas elas desativadas para melhoria do sistema.</br>
                  SD-GTI, abra um chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, com problema.</br>
                  Caso o atendimento seja fora da estrutura da SETAS favor entrar em contato (63) 3218-1951.
              </div>-->
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Aviso!</h4>
                Sistema reestabelecido em suas funções!</br>
                Caso necessite de algum atendimento, favor abrir um chamado pelo <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a> ou entrar em contato (63) 3218-1951
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

  @endif
  @if($usuarios->perfil->id_perfil == 3)
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="fa fa-warning"></i>
            <h3 class="box-title">Aviso</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div> -->
            <!--<div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Aviso!</h4>
              O sistema está passando por uma leve instabilidade, cajo haja funcionalidades que não podem ser usadas, favor entrar em contato.</br>
              Setor de Desenvolvimento pelo Chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, informando qual ação deseja fazer.</br>
              Caso o atendimento seja fora da estrutura da SETAS favor entrar em contato (63) 3218-1951.
            </div>-->
            <!-- <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                O SGI estará fora ar no período de 28 de abril à 02 de maio, em face de uma manutenção preventiva e suas funcionalidades estarão todas elas desativadas para melhoria do sistema.</br>
                SD-GTI, abra um chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, com problema.</br>
                Caso o atendimento seja fora da estrutura da SETAS favor entrar em contato (63) 3218-1951.
            </div> -->
             <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Aviso!</h4>
              Sistema reestabelecido em suas funções!</br>
              Caso necessite de algum atendimento, favor abrir um chamado pelo <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a> ou entrar em contato (63) 3218-1951
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3">
      </div>
    </div>
  @endif

@endsection