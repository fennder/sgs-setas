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
                    <th style="width: 10px">Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Setor</th>
                    <th>Acesso</th>
                    @if($usuarios->id_perfil == 1)
                      <th style="width: 40px" colspan="2">Ação</th>
                    @elseif($usuarios->id_perfil == 2)
                      <th style="width: 40px" colspan="2">Ação</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    @if($user->dados_atualizados == 1)
                      <tr>
                        <td>{{$user->id}}.</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->departamento->descricao}}</td>
                        <td>{{$user->perfil->descricao}}</td>
                        @if($usuarios->id_perfil == 1)
                          <td class="text-center">
                            <a href="{{route('u.edit', ['id' => $user->id])}}"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{route('u.destroy', ['id' => $user->id])}}"><i class="glyphicon glyphicon-trash"></i></a>
                          </td>
                        @elseif($usuarios->id_perfil == 2)
                          <td class="text-center">
                            <a href="{{route('u.edit', ['id' => $user->id])}}"><i class="glyphicon glyphicon-edit"></i></a>
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







