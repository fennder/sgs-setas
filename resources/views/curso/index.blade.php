@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <!-- <div class="box-header with-border">
        <h3 class="box-title">Lista de Cursos</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div> -->
      <div class="box-body">
        <a class="btn btn-primary" href="{{ route('cs.create')}}">Incluir Curso</a>
        <ul class="pagination pagination-sm no-margin pull-right">
          <li>{!!$cursos->render()!!}</li>
        </ul>
        <table class="table table-bordered table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th>Id</th>
              <th>Descrição</th>
              <th style="width: 10%">Início</th>
              <th style="width: 20%">Término</th>
              <th>Status</th>
              <th align="text-center" class="text-center" style="width: 120px" colspan="3">Ação</th>                   
            </tr>
          </thead>
          <tbody>
            @if($cursos)
              @foreach($cursos as $curso)  
                @if($curso->id_status_curso == 1)
                  <tr class="success">
                    <td>{{$curso->id_curso}}.</td>
                    <td>{{$curso->descricao}}</td>
                    <td>{{$curso->data_inicio}}</td>
                    <td>{{$curso->data_termino}}</td>
                    <td>{{$curso->statuscurso->descricao}}</td>
                    <td class="text-center">
                      <a href="{{route('cs.show', ['id' => $curso->id_curso])}}" class="btn btn-success" role="button">Lista</a>
                    </td>

                    <td class="text-center">
                      <a href="{{route('cs.edit', ['id' => $curso->id_curso])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>

                    <td class="text-center">
                      
                        <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-outline btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h2 class="modal-title">CUIDADO! ESTA AÇÃO NÃO TEM VOLTA!</h2>
                                </div>
                                <div class="modal-body">
                                  <a href="#">
                                    <img src="{{ asset('/imagens/urso.gif') }}" width="70%">
                                  </a>
                                  <p>Você está prestes a excluir um curso, tem realmente certeza disto?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                  <a href="{{route('cs.destroy', ['id' => $curso->id_curso])}}" class="btn btn-danger" title="Deseja realmente excluir o projeto?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir permanente</a>
                                </div>
                              </div>
                              
                            </div>
                          </div><!-- Modal -->

                    </td>
                  </tr>            
                @elseif($curso->id_status_curso == 2)
                  <tr class="warning">
                    <td>{{$curso->id_curso}}.</td>
                    <td>{{$curso->descricao}}</td>
                    <td>{{$curso->data_inicio}}</td>
                    <td>{{$curso->data_termino}}</td>
                    <td>{{$curso->statuscurso->descricao}}</td>
                    <td class="text-center">
                      <a href="{{route('cs.show', ['id' => $curso->id_curso])}}" class="btn btn-success" role="button">Lista</a>
                    </td>

                    <td class="text-center">
                      <a href="{{route('cs.edit', ['id' => $curso->id_curso])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>

                    <td class="text-center">
                      <!-- <a href="{{route('cs.destroy', ['id' => $curso->id_curso])}}" class="btn btn-danger" role="button">Excluir</a> -->
                    </td>
                  </tr>        
                @elseif($curso->id_status_curso == 3)
                  <tr class="danger">
                    <td>{{$curso->id_curso}}.</td>
                    <td>{{$curso->descricao}}</td>
                    <td>{{$curso->data_inicio}}</td>
                    <td>{{$curso->data_termino}}</td>
                    <td>{{$curso->statuscurso->descricao}}</td>
                    <td class="text-center">
                      <a href="{{route('cs.show', ['id' => $curso->id_curso])}}" class="btn btn-success" role="button">Lista</a>
                    </td>

                    <td class="text-center">
                      <a href="{{route('cs.edit', ['id' => $curso->id_curso])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>

                    <td class="text-center">
                      <!-- <a href="{{route('cs.destroy', ['id' => $curso->id_curso])}}" class="btn btn-danger" role="button">Excluir</a> -->
                    </td>
                  </tr>        
                @elseif($curso->id_status_curso == 4)
                  <tr class="info">
                    <td>{{$curso->id_curso}}.</td>
                    <td>{{$curso->descricao}}</td>
                    <td>{{$curso->data_inicio}}</td>
                    <td>{{$curso->data_termino}}</td>
                    <td>{{$curso->statuscurso->descricao}}</td>
                    <td class="text-center">
                      <a href="{{route('cs.show', ['id' => $curso->id_curso])}}" class="btn btn-success" role="button">Lista</a>
                    </td>

                    <td class="text-center">
                      <a href="{{route('cs.edit', ['id' => $curso->id_curso])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>

                    <td class="text-center">
                      <!-- <a href="{{route('cs.destroy', ['id' => $curso->id_curso])}}" class="btn btn-danger" role="button">Excluir</a> -->
                    </td>
                  </tr>
                @endif
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