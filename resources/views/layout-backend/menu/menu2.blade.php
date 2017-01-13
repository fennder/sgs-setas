
<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  <li class="header">OPÇÕES</li>
  
  <li class="active"><a href="{!! route('h.index') !!}"><i class="glyphicon glyphicon-home"></i> <span>HOME</span></a></li>
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-education"></i> <span>GERENCIAR CURSOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">                  
      <li><a href="{!! route('cs.index') !!}">Cursos</a></li>
      <li><a href="{!! route('m.index') !!}">Módulos</a></li>
      <!-- <li><a href="{!! route('sc.index') !!}">Status Curso</a></li> -->
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-user"></i> <span>GERENCIAR USUÁRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('u.index') !!}">Relação de Usuários</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-edit"></i> <span>GERENCIAR INSCRIÇÃO</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('ins.index') !!}">Relação de Inscritos</a></li>
      <li><a href="{!! route('ins.create') !!}">Inscrever</a></li>
      <li><a href="{!! route('ins.show') !!}">Minhas Inscrições</a></li>
    </ul>
  </li>

  <li class="treeview">
    <a href="#"><i class="ion ion-pie-graph"></i> <span>RELATÓRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('dep.index') !!}"><i class="fa fa-angle-right"></i>Listagem</a></li>                  
    </ul>
  </li>

  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-cog"></i> <span>CONFIGURAÇÕES</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-unchecked"></i>ENTIDADE <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('o.index') !!}"><i class="fa fa-angle-right"></i>Órgão</a></li> 
          <li><a href="{!! route('dep.index') !!}"><i class="fa fa-angle-right"></i>Departamento</a></li>
    
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-road"></i>LOCALIDADE<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('cid.index') !!}"><i class="fa fa-angle-right"></i>Cidade</a></li>
          <li><a href="{!! route('est.index') !!}"><i class="fa fa-angle-right"></i>Estado</a></li>
          <li><a href="{!! route('r.index') !!}"><i class="fa fa-angle-right"></i>Região</a></li>
    
        </ul>
      </li> -->
      
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-user"></i>PROFISSIONAL<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
        
          <li><a href="{!! route('c.index') !!}"><i class="fa fa-angle-right"></i>Cargo</a></li>
          <li><a href="{!! route('f.index') !!}"><i class="fa fa-angle-right"></i>Função</a></li>
          <!-- <li><a href="{!! route('vi.index') !!}"><i class="fa fa-angle-right"></i>Vinculo Institucional</a></li> -->
          <li><a href="{!! route('e.index') !!}"><i class="fa fa-angle-right"></i>Escolaridade</a></li>
          <li><a href="{!! route('d.index') !!}"><i class="fa fa-angle-right"></i>Deficiência</a></li>
    
        </ul>
      </li>

    </ul>
  </li>
  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>SAIR</span></a>
  </li>
</ul>
      