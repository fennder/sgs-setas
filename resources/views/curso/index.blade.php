@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de Cursos</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <a class="btn btn-primary" href="{{ route('cs.create')}}">Novo</a>
        </br>
        </br>
        <table class="table table-bordered table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Descrição</th>
              <th>Data Início</th>
              <th>Data Término</th>
              <th>Status do Curso</th>
              <th style="width: 40px" colspan="2">Ação</th>                   
            </tr>
          </thead>
          <tbody>
            @if($cursos)
              @foreach($cursos as $curso)  
                
                <tr>
                  <td>{{$curso->id_curso}}.</td>
                  <td>{{$curso->descricao}}</td>
                  <td>{{$curso->data_inicio}}</td>
                  <td>{{$curso->data_termino}}</td>
                  <td>{{$curso->statuscurso->descricao}}</td>
                  <td class="text-center">
                    <!-- <a href="{{route('cs.show')}}"><i class="glyphicon glyphicon-th-list"></i></a> --> 
                    <a href="{{route('cs.edit', ['id' => $curso->id_curso])}}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{{route('cs.destroy', ['id' => $curso->id_curso])}}"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>            
                
              @endforeach
            @else
              <p>Não há registros</p>
            @endif
          </tbody>
        </table>
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
              <li>{!!$cursos->render()!!}</li>
            </ul>
      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- Col 8 -->
</div> <!-- Row -->

@endsection