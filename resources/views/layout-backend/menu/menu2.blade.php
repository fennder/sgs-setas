
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
      <li><a href="{!! route('sc.index') !!}">Status Curso</a></li>
    </ul>
  </li>
<!--   <li class="treeview">
    <a href="#"><i class="fa fa-users"></i> <span>GERENCIAR USUÁRIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('u.index') !!}">Relação de Usuários</a></li>
    </ul>
  </li> -->
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-edit"></i> <span>GERENCIAR INSCRIÇÃO</span> </i></a>
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
  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>Sair</span></a>
  </li>
</ul>
      