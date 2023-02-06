@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Estados</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('est.create')}}">Incluir Estado</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Nome</th>
                    <th>UF</th> 
                    <th>Status</th>                    
                    <!-- <th style="width: 40px" colspan="2">Ação</th> -->                    
                  </tr>
                </thead>
                <tbody>
                  @if($estados)
                    @foreach($estados as $estado)
                      <tr>
                        <td>{{$estado->id_estado}}.</td>
                        <td>{{$estado->nome}}</td>
                        <td>{{$estado->uf}}</td>
                        <td>{{$estado->status}}</td>
                        <!-- <td class="text-center">
                          <a href="{{route('est.edit', ['id' => $estado->id_estado])}}" class="btn btn-primary" role="button">Editar</a>
                          <a href="{{route('est.destroy', ['id' => $estado->id_estado])}}" class="btn btn-danger" role="button">Excluir</a>

                          <a href=""><i class="glyphicon glyphicon-edit"></i></a>
                          <a href=""><i class="glyphicon glyphicon-trash"></i></a>
                        </td> -->
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
                <li>{!!$estados->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection