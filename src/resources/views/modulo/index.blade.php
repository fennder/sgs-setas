@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <!-- <div class="box-header with-border">
          <h3 class="box-title">Lista de Modulos</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div> -->
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('m.create')}}">Incluir Módulo</a>
          </br>
          </br>
              @include('layout-backend.busca_tabela')
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Descrição</th>
                    <!-- <th>Conteúdo</th> -->
                    <th>Curso</th>
                    <th style="width: 40px" colspan="2"><center>Ação</center></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($modulos)
                    @foreach($modulos as $modulo)
                      <tr>
                        <td>{{$modulo->id_modulo}}.</td>
                        <td>{{$modulo->descricao}}</td>
                       <!-- <td>{!!$modulo->conteudo!!}</td> -->
                        <td>{{$modulo->curso->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('m.edit', ['id' => $modulo->id_modulo])}}" class="btn btn-primary" role="button">Editar</a>
                        </td>
                        <td>
                          
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
                                  <a href="{{route('m.destroy', ['id' => $modulo->id_modulo])}}" class="btn btn-danger" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir permanente</a>
                                </div>
                              </div>
                              
                            </div>
                          </div><!-- Modal -->

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