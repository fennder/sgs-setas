
<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  <li class="header">OPÇÕES</li>

  <li class="active"><a href="{!! route('h.index') !!}"><i class="glyphicon glyphicon-home"></i> <span>PÁGINA INICIAL</span></a></li>
  
  <li class="treeview">
    <a href="{!! route('ins.create') !!}"><i class="glyphicon glyphicon-edit"></i> <span>FAZER INSCRIÇÃO</span></a>
    <!-- <ul class="treeview-menu">
      <li><a href="#">Inscrever</a></li>    
    </ul> -->
  </li>
  <li class="treeview">
    <a href="{!! route('ins.show') !!}"><i class="glyphicon glyphicon-list-alt"></i> <span>MINHAS INSCRIÇÕES</span></a>
    <!-- <ul class="treeview-menu">
      <li><a href="#">Inscrever</a></li>    
    </ul> -->
  </li>
  
  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>SAIR</span></a>
  </li>
</ul>
