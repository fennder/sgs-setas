@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Escolaridades</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{!! route('e.create')!!}">Incluir Escolaridade</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Descrição</th>                    
                    <th style="width: 40px" colspan="2"><ceneter>Ação</ceneter></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($escolaridades)
                    @foreach($escolaridades as $escolaridade)
                      <tr>
                        <td>{{$escolaridade->id_escolaridade}}.</td>
                        <td>{{$escolaridade->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('e.edit', ['id' => $escolaridade->id_escolaridade])}}" class="btn btn-primary" role="button">Editar</a>
                          <!-- <a href="{{route('e.destroy', ['id' => $escolaridade->id_escolaridade])}}" class="btn btn-danger" role="button">Excluir</a> -->
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td>Nenhum registro encontrado!</td>
                    </tr>
                  @endif
                </tbody>
              </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li>{!!$escolaridades->render()!!}</li>
          </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection