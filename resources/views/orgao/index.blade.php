@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Órgãos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('o.create')}}">Novo</a>
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
                  @if($orgaos)
                    @foreach($orgaos as $orgao)
                      <tr>
                        <td>{{$orgao->id_orgao}}.</td>
                        <td>{{$orgao->descricao}}</td>                        
                          <td class="text-center">
                            <a href="{{route('o.edit', ['id' => $orgao->id_orgao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{route('o.destroy', ['id' => $orgao->id_orgao])}}"><i class="glyphicon glyphicon-trash"></i></a>
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
                <li>{!!$orgaos->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection