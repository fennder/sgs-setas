@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Modulos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('m.create')}}">Novo</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Descrição</th>
                    <th>Conteúdo</th>
                    <th>Curso</th>
                    <th style="width: 40px" colspan="2">Ação</th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($modulos)
                    @foreach($modulos as $modulo)
                      <tr>
                        <td>{{$modulo->id_modulo}}.</td>
                        <td>{{$modulo->descricao}}</td>
                        <td>{!!$modulo->conteudo!!}</td>
                        <td>{{$modulo->curso->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('m.edit', ['id' => $modulo->id_modulo])}}"><i class="glyphicon glyphicon-edit"></i></a>
                          <!-- <a href="{{route('m.destroy', ['id' => $modulo->id_modulo])}}"><i class="glyphicon glyphicon-trash"></i></a> -->
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <p>Nenhum registro encontrado!</p>
                  @endif
                </tbody>
              </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!!$modulos->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection