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
          <p>{{ $usuarios->nome_cracha or "Nome do Servidor"}}</p>
           <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Disponível</a -->
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
      @if($usuarios->dados_atualizados == 0)
        @include('layout-backend.menu.menu')
      @else
        @if($usuarios->id_perfil == 1)
          @include('layout-backend.menu.menu1')
        @endif
        @if($usuarios->id_perfil == 2)
          @include('layout-backend.menu.menu2')
        @endif
        @if($usuarios->id_perfil == 3)
          @include('layout-backend.menu.menu3')
        @endif
      @endif
      
    </section>
    <!-- /.sidebar -->
  </aside>