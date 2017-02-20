@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de usuários cadastrados</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover table-condensed">
            <thead>
              <tr>              
                <th>Nome</th>
                <th>E-mail</th>
                <th>Função</th>
                <th>Permissão</th>
                <th style="width: 10%" colspan="2"><center>Ação</center></th>                   
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                
                  @if($user->dados_atualizados == 1)
                    <tr>     
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->funcao->descricao}}</td>
                      <td>{{$user->perfil->descricao}}</td>
                      @if($usuarios->id_perfil == 1)
                        <td class="text-center">
                          <a href="{{route('u.edit', ['id' => $user->id])}}" class="btn btn-primary" role="button">Editar</a>
                        </td>
                        <td class="text-center">
                          <a href="{{route('u.destroy', ['id' => $user->id])}}" class="btn btn-danger" role="button">Excluir</a>
                        </td>
                      @elseif($usuarios->id_perfil == 2)
                        <td class="text-center">
                          <a href="{{route('u.edit', ['id' => $user->id])}}" class="btn btn-primary" role="button">Editar</a>
                        </td>
                      @endif
                    </tr>
                  @endif
                
              @endforeach  
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!! $users->render() !!}</li>
              </ul>
        </div>
    </div>
          <!-- /.box -->
  </div>
        <!-- /.col -->
  <!-- <div class="col-md-4">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title">Mais informações</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
      </div>
    </div>
  </div> -->
  <!-- /.col -->
</div>

@endsection







