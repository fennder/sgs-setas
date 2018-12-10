<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  <li class="header">OPÇÕES</li>

  <li class="active"><a href="{!! route('h.index') !!}"><i class="glyphicon glyphicon-home"></i> <span>PÁGINA INICIAL</span></a></li>
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-education"></i> <span>GERENCIAR CURSOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('cs.index') !!}"><i class="fa fa-angle-right"></i>Cursos</a></li>
      <li><a href="{!! route('m.index') !!}"><i class="fa fa-angle-right"></i>Módulos</a></li>
      <li><a href="{!! route('sc.index') !!}"><i class="fa fa-angle-right"></i>Status Curso</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-user"></i> <span>GERENCIAR USUÁRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('u.index') !!}"><i class="fa fa-angle-right"></i>Administradores</a></li>
      <li><a href="{!! route('u.gerente') !!}"><i class="fa fa-angle-right"></i>Gerentes</a></li>
      <li><a href="{!! route('u.usuario') !!}"><i class="fa fa-angle-right"></i>Usuários</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-edit"></i> <span>GERENCIAR INSCRIÇÃO</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('ins.index') !!}"><i class="fa fa-angle-right"></i>Listagem de Inscritos</a></li>
      <li><a href="{!! route('ins.create') !!}"><i class="fa fa-angle-right"></i>Inscrever</a></li>
      <li><a href="{!! route('ins.show') !!}"><i class="fa fa-angle-right"></i>Minhas Inscrições</a></li>
    </ul>
  </li>

  <li class="treeview">
    <a href="#"><i class="ion ion-pie-graph"></i> <span>MOSTRAR RELATÓRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="ion ion-map"></i>MOSTRAR REGIONAIS<i class="fa fa-angle-left pull-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-right"></i>Estado</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Norte I</a></li> 
          <li><a href="#"><i class="fa fa-angle-right"></i>Norte II</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Norte III</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Centro Leste</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Centro Oeste</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Sudeste</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Sudoeste</a></li>
        </ul>
        
      </li>                 
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-cog"></i> <span>CONFIGURAÇÕES</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-tasks"></i>ENTIDADE <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('o.index') !!}"><i class="fa fa-angle-right"></i>Órgão</a></li> 
          <li><a href="{!! route('dep.index') !!}"><i class="fa fa-angle-right"></i>Departamento</a></li>
            
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-map-marker"></i>LOCALIDADE<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('cid.index') !!}"><i class="fa fa-angle-right"></i>Cidade</a></li>
          <li><a href="{!! route('est.index') !!}"><i class="fa fa-angle-right"></i>Estado</a></li>
          <li><a href="{!! route('r.index') !!}"><i class="fa fa-angle-right"></i>Região</a></li>
    
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-user"></i>PROFISSIONAL<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('c.index') !!}"><i class="fa fa-angle-right"></i>Cargo</a></li>
          <li><a href="{!! route('f.index') !!}"><i class="fa fa-angle-right"></i>Função</a></li>
          <li><a href="{!! route('vi.index') !!}"><i class="fa fa-angle-right"></i>Vinculo Institucional</a></li>
          <li><a href="{!! route('e.index') !!}"><i class="fa fa-angle-right"></i>Escolaridade</a></li>
          <li><a href="{!! route('d.index') !!}"><i class="fa fa-angle-right"></i>Deficiência</a></li>
    
        </ul>
      </li>              
     
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-lock"></i>SEGURANÇA<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('pf.index') !!}"><i class="fa fa-angle-right"></i>Perfil</a></li>
    
        </ul>
      </li>

    </ul>
  </li>
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-screenshot"></i> <span>AJUDA</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="ion ion-map"></i>MOSTRAR MANUAIS<i class="fa fa-angle-left pull-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-right"></i>Administrador</a></li>
          <li><a href="{{ asset('/documentacao/MANUAL SGI-GERENTE.pdf') }}" target="_blank""><i class="fa fa-angle-right"></i>Gerente</a></li>
          <li><a href="{{ asset('/documentacao/MANUAL SGI-USUARIO.pdf') }}" target="_blank"><i class="fa fa-angle-right"></i>Usuário</a></li> 
        </ul>
        
      </li>
                 
    </ul>
  </li>

  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="ion ion-power"></i> <span>SAIR</span></a>
  </li>
  
</ul>