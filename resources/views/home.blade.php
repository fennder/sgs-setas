@extends('layout-backend.admin_template')

@section('content')
	<h4>
    <small>
  		Bem  
      @if($usuarios->sexo == "Feminino")
        Vinda! Senhora
      @else
        Vindo! Senhor
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
            <h3>{{$cont_curso or "null"}}</h3>
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
            <h3>{{$cont_user or "null"}}<!-- <sup style="font-size: 20px">%</sup> --></h3>
            <p>USUÁRIOS</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-people-outline"></i>
          </div>
          <a href="{{ route('u.usuario') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-md-4 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$cont_ins or null}}</h3>
            <p>INSCRIÇÕES</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-compose-outline"></i>
          </div>
          <a href="{{ route('ins.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

     <!--  <div class="col-md-3 col-sm-6 col-xs-12">
        
        <div class="small-box bg-red">
          <div class="inner">
            
            <h3>{{$cont_reg or null}}</h3>
            
            <p>RELATÓRIOS</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#SETAS-Link será colocado depois" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div> -->
      <!-- ./col -->

    <!-- /.row -->
      <div class="row">
        <div class="col-md-4">     
            
        </div>
        <div class="col-md-4">     
            <!-- <video width="100%" height="100%" controls autoplay> -->
            <video width="100%" height="100%" controls>
            <source src="{{ asset('/video/institucional.mp4') }}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            O seu navegador não suporta este tipo de midia.
          </video>
        </div>
        <div class="col-md-4">     
        </div><!-- Row -->
      </div>

      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-6">
                      
          <!-- <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Aviso!</h4>
            Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
            soul, like these sweet mornings of spring which I enjoy with my whole heart.
          </div> -->
          <!-- <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Aviso!</h4>
            Devido aos ataques acontecidos em todo o mundo, tomaremos mais precauções quanto ao acesso ao sistema, tenha paciência caso ocorra alguma lentidão.</br>
            <p>Setor de Desenvolvimento pelo Chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, informando qual ação deseja fazer.</p></br>
            <p>Caso o atendimento seja fora da estrutura da SETAS, no sentido técnico do sistema, favor entrar em contato (63) 3218-1951.</p>
          </div> -->
          <!-- <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Aviso!</h4>
            <p>Informo que foi liberada uma nova funcionalidade. Agora você poderá editar seus dados sem que haja a necessidade de entrar em contato com o corpo técnico da SETAS.</p></br>
            <p>No canto superior direito, onde aparece o seu nome, você deve clicar e escolher a opção "Meus dados", como aparece na figura abaixo.</p><img src="{{ asset("/imagens/acesso a edicao usuario.png") }}" alt="Edição de Usuário" width="100%" height="100%"></br>
            <p>Setor de Desenvolvimento pelo Chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, informando qual ação deseja fazer.</p></br>
            <p>Caso o atendimento seja fora da estrutura da SETAS, no sentido técnico do sistema, favor entrar em contato (63) 3218-1951.</p>
          </div> -->
         <!-- <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Aviso!</h4>
              <p>O SGI estará fora ar no período de 28 de abril à 02 de maio, em face de uma manutenção preventiva e suas funcionalidades estarão todas elas desativadas para melhoria do sistema.</p></br>
              SD-GTI, abra um chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, com problema.</br>
              Caso o atendimento seja fora da estrutura da SETAS, no sentido técnico do sistema, favor entrar em contato (63) 3218-1951.
          </div> -->
          <!-- <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="fa fa-check"></i> Aviso!</h4>
            <p>Sistema reestabelecido em suas funções!</p></br>
            <p>Caso necessite de atendimento técnico do sistema, favor abrir um chamado pelo <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>.</p>
          </div> -->
            
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          
        </div>
      </div>

  @endif
  @if($usuarios->perfil->id_perfil == 3)
    <!-- Apresentação de vídeo -->
    <!-- <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">     
        
        <video width="100%" height="100%" controls>
          <source src="{{ asset('/video/institucional.mp4') }}" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          O seu navegador não suporta este tipo de midia.
        </video>
      
      </div>
      <div class="col-md-4">           
      </div>
    </div> -->

    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
                      
          <!-- <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Aviso!</h4>
            Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
            soul, like these sweet mornings of spring which I enjoy with my whole heart.
          </div> -->
          <!-- <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Aviso!</h4>
           <p>Informo que foi liberada uma nova funcionalidade. Agora você poderá editar seus dados sem que haja a necessidade de entrar em contato com o corpo técnico da SETAS.</p></br>
            <p>No canto superior direito, onde aparece o seu nome, você deve clicar e escolher a opção "Meus dados", como aparece na figura abaixo.</p><img src="{{ asset("/imagens/acesso a edicao usuario.png") }}" alt="Edição de Usuário" width="100%" height="100%"></br>
            <p>Setor de Desenvolvimento pelo Chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, informando qual ação deseja fazer.</p></br>
            <p>Caso o atendimento seja fora da estrutura da SETAS, no sentido técnico do sistema, favor entrar em contato (63) 3218-1951.</p>
          </div> -->
          <!--  <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Aviso!</h4>
              O SGI estará fora ar no período de 28 de abril à 02 de maio, em face de uma manutenção preventiva e suas funcionalidades estarão todas elas desativadas para melhoria do sistema.</br>
              SD-GTI, abra um chamado <a href="http://open.setas.to.gov.br/helpdesk/app_Login/app_Login.php" target="_blank">Help Desk</a>, com problema.</br>
              Caso o atendimento seja fora da estrutura da SETAS, no sentido técnico do sistema, favor entrar em contato (63) 3218-1951.
          </div> -->
          <!-- <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="fa fa-check"></i> Informação!</h4>
            Anote e guarde o seu E-MAIL e SENHA para acessar com maior facilidade o sistema!</br>
            Caso necessite de algum atendimento, no sentido técnico do sistema, entrar em contato (63) 3218-1951
          </div> -->
            
        </div>
        <!-- /.col -->
      <div class="col-md-3">
      </div>
    </div>
  @endif

@endsection
