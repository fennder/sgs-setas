
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
  
  <li class="treeview">
    <a href="#"><i class="glyphicon glyphicon-screenshot"></i> <span>AJUDA</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="ion ion-map"></i>MOSTRAR MANUAIS<i class="fa fa-angle-left pull-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a href="{{ asset('/documentacao/MANUAL SGI-USUARIO.pdf') }}" target="_blank"><i class="fa fa-angle-right"></i>Usuário</a></li>
        </ul>
        
      </li>
                 
    </ul>
  </li>

  <li>
    <a href="{!! route('a.getLogout') !!}"><i class="glyphicon glyphicon-log-out"></i> <span>SAIR</span></a>
  </li>
</ul>
