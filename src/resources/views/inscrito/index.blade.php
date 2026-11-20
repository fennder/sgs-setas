@extends('layout-backend.admin_template')

@section('content')

<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de usuários cadastrados</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{{route('i.create')}}">Incluir Usuário</a>
          </br>
          </br>
              @include('layout-backend.busca_tabela')
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>NOME</th>        
                    <th>SEXO</th>        
                    <th>CPF</th>                    
                    <th>TELEFONE PESSOAL</th>
                    <th>DATA NASCIMENTO</th>            
                    <th>EMAIL PESSOAL</th> 
                    <th>EMAIL TRABALHO</th>                      
                    <th style="width: 40px" colspan="2"><center>AÇÃO</center></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($usuarios)
                    @foreach($usuarios as $usuario)
                      <tr>
                        <td>{{$usuario->id}}.</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->sexo}}</td>
                        <td>{{$usuario->cpf}}</td> 
                        <td>{{$usuario->telefone_pessoal}}</td>
                        <td>{{$usuario->data_nascimento}}</td>                  
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->email_institucional}}</td>                 
                        <td class="text-center">
                          <a href="{{route('i.edit'), ['id' => $usuario->id]}}" class="btn btn-primary" role="button">Editar</a>
                          <!-- <a href="{{route('i.destroy'), ['id' => $usuario->id]}}" class="btn btn-danger" role="button">Excluir</a> -->
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
                <li>{!!$usuarios->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->

<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Informações Complementares</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          
        </div><!-- /.box-body -->
        
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li>{!!$usuarios->render()!!}</li>
          </ul>
        </div>
    </div><!-- /.box -->
          
  </div><!-- /.col 8 -->
  <div class="col-md-4">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title">Mais informações</h3>
          <!-- Inserir conteúdo aqui -->
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
      </div>
      <div class="box-body">
              
      </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li>{!!$usuarios->render()!!}</li>
          </ul>
        </div>
    </div><!-- /.col -->
    
  </div>
</div>

@endsection