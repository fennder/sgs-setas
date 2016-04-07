
<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  <li class="header">OPÇÕES</li>
  <!-- Optionally, you can add icons to the links >
  <li class="active"><a href="auth/lista"><i class="fa fa-link"></i> <span>GERENCIADOR</span></a></li>
  
  <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li-->

  <li class="active"><a href="{!! route('h.index') !!}"><i class="glyphicon glyphicon-home"></i> <span>HOME</span></a></li>
  
  <li class="treeview">
    <a href="{!! route('ins.create') !!}"><i class="glyphicon glyphicon-edit"></i> <span>FAZER INSCRIÇÃO</span> <i class="fa fa-angle-left pull-right"></i></a>
    <!-- <ul class="treeview-menu">
      <li><a href="#">Inscrever</a></li>    
    </ul> -->
  </li>
  
  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>Sair</span></a>
  </li>
</ul>
