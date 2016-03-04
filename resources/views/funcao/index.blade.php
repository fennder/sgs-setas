@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-6">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Funções</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('f.create')}}">Novo</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Descrição</th>
                    <th style="width: 40px" colspan="2">Ação</th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($funcoes)
                    @foreach($funcoes as $funcao)
                      <tr>
                        <td>{{$funcao->id_funcao}}.</td>
                        <td>{{$funcao->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('f.edit', ['id' => $funcao->id_funcao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                          <a href="{{route('f.destroy', ['id' => $funcao->id_funcao])}}"><i class="glyphicon glyphicon-trash"></i></a>
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
                <li>{!!$funcoes->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->
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
            <li>#</li>
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
            <li>#</li>
          </ul>
        </div>
    </div><!-- /.col -->
    
  </div>
</div>

@endsection