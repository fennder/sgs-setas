  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('bower_components/AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $usuarios->name or "Nome do Servidor"}}</p>
          <!-- Status >
          <a href="#"><i class="fa fa-circle text-success"></i> Disponível</a-->
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Procurar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">OPÇÕES</li>
        <!-- Optionally, you can add icons to the links >
        <li class="active"><a href="auth/lista"><i class="fa fa-link"></i> <span>GERENCIADOR</span></a></li>
        
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li-->

        <li class="active"><a href="{!! route('h.index') !!}"><i class="glyphicon glyphicon-home"></i> <span>HOME</span></a></li>
        <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-education"></i> <span>GERENCIAR CURSOS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">                  
                  <li><a href="{!! route('cs.index') !!}">Cursos</a></li>
                  <li><a href="{!! route('m.index') !!}">Módulos</a></li>
                  <li><a href="{!! route('sc.index') !!}">Status</a></li>
                </ul>
            </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>GERENCIAR USUÁRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="{!! route('u.index') !!}">Relação de Usuários</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-edit"></i> <span>GERENCIAR INSCRIÇÃO</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="{!! route('ins.index') !!}">Relação de Inscritos</a></li>
            <li><a href="{!! route('ins.create') !!}">Inscrever</a></li>
            
          </ul>
        </li>
        <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-cog"></i> <span>CONFIGURAÇÕES</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{!! route('c.index') !!}">Cargo</a></li>
                <li><a href="{!! route('cid.index') !!}">Cidade</a></li>
                <li><a href="{!! route('d.index') !!}">Deficiência</a></li>
                <li><a href="{!! route('dep.index') !!}">Departamento</a></li>
                <li><a href="{!! route('e.index') !!}">Escolaridade</a></li>
                <li><a href="{!! route('est.index') !!}">Estado</a></li>
                <li><a href="{!! route('f.index') !!}">Função</a></li>
                <li><a href="{!! route('o.index') !!}">Órgão</a></li> 
                <li><a href="{!! route('r.index') !!}">Região</a></li>
                <li><a href="{!! route('vi.index') !!}">Vinculo Institucional</a></li>
             
                 
              </ul>
            </li>
            <li><a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>Sair</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>