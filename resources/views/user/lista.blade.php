@extends('layout-backend.admin_template')

@section('content')

<div class="row" style="width: 100%">
  <div class="col-md-12">
    <div class="box">     
      <div class="box-header with-border">
          <ul class="pagination pagination-sm no-margin">
              <li>{!! $users->render() !!}</li>
          </ul>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover table-condensed">
            <thead>
              <tr>
                @if($usuarios->id_perfil = 1)
                <th>Id</th>
                @endif
                <th style="width: 30%">Nome</th>
                <th style="width: 25%">E-mail</th>
                <th style="width: 20%">Função</th>
                <th style="width: 15%">Telefone</th>
                <th style="width: 10%">Acesso</th>
                <th colspan="2"><center>Ação</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                
                  @if($user->dados_atualizados == 1)
                    <tr>
                      @if($usuarios->id_perfil = 1)
                        <td>{{$user->id}}</td>
                      @endif
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->funcao->descricao}}</td>
                        <td>{{$user->telefone_pessoal}}</td>
                        <td>{{$user->perfil->descricao}}</td>
                      @if($usuarios->id_perfil == 1)
                        <td class="text-center">
                          <a href="{{route('u.edit', ['id' => $user->id])}}" class="btn btn-primary" role="button">Editar</a>
                        </td>
                        <td class="text-center">
                          <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-outline btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

                          <!-- Modal mensagem de exclusão -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h2 class="modal-title">ATENÇÃO! NÃO É PERMITIDO EXCLUIR USUÁRIO!</h2>
                                </div>
                                <div class="modal-body">
                                  <a href="#">
                                    <img src="{{ asset('/imagens/deletar_usuario.png') }}" width="70%">
                                  </a>
                                  <p>Você estava prestes a excluir um usuário, por questões de segurança é proibido a exclusão de usuários!</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                  <!-- <a href="{{route('u.destroy', ['id' => $user->id])}}" class="btn btn-danger" title="Deseja realmente excluir o usuário?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir permanente</a> -->
                                </div>
                              </div>
                              
                            </div>
                          </div><!-- Modal -->

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

</div>

@endsection