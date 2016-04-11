@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-8">
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
                    <th style="width: 40px" colspan="2">Ação</th>
                    <!--th style="width: 40px">Excluir</th-->
                  </tr>
                </thead>
                <tbody>
                  @if($users)
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}.</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center">
                          <a href="{{route('u.edit', ['id' => $user->id])}}"><i class="glyphicon glyphicon-edit"></i></a>
                          <a href="{{route('u.destroy', ['id' => $user->id])}}"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <p>Nenhum registro encontrado!</p>
                  @endif
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
  <div class="col-md-4">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title">Mais informações</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
      </div>
    </div>
    <!-- /.col -->
  </div>
</div>

@endsection







