@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('o.create')}}">Novo</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 5%">Id</th>
                    <th style="width: 75%">Descrição</th>
                    <th style="width: 20%" colspan="2"><center>Ação</center></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($orgaos)
                    @foreach($orgaos as $orgao)
                      <tr>
                        <td>{{$orgao->id_orgao}}.</td>
                        <td>{{$orgao->descricao}}</td>                        
                          <td class="text-center">
                            <a href="{{route('o.edit', ['id' => $orgao->id_orgao])}}" class="btn btn-primary" role="button">Editar</a>
                            @if($usuarios->id_perfil == 1)
                              <a href="{{route('o.destroy', ['id' => $orgao->id_orgao])}}" class="btn btn-danger" role="button">Excluir</a>
                            @endif
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