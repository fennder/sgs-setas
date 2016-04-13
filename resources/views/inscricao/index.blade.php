@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Inscrições</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{!! route('ins.create')!!}">Novo</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Curso</th>
                    <th>Inscrito</th>
                    <th>Função</th>
                    <th style="width: 40px" colspan="2">Ação</th>                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($inscricoes as $inscricao)
                      <tr>
                        <td>{{$inscricao->cursos->descricao}}</td>
                        <td>{{$inscricao->usuario->name}}</td>
                        <td>{{$inscricao->usuario->funcao->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                          <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!!$inscricoes->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->


@endsection