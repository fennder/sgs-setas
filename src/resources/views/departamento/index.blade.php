@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
      
        <div class="box-body">
        <ul class="pagination pagination-sm no-margin pull-right">
            <li>{!!$departamentos->render()!!}</li>
          </ul>
          <a class="btn btn-primary" href="{!! route('dep.create')!!}">Incluir Departamento</a>

          <form method="GET" action="{{ route('dep.index') }}" class="form-inline" style="margin-left: 10px; display: inline-block;">
            <select name="id_orgao" class="form-control input-sm">
              <option value="">Todos os órgãos</option>
              @foreach($orgaos as $orgao)
                <option value="{{ $orgao->id_orgao }}" {{ isset($idOrgao) && $idOrgao == $orgao->id_orgao ? 'selected' : '' }}>
                  {{ $orgao->descricao }}
                </option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
            @if(!empty($idOrgao))
              <a href="{{ route('dep.index') }}" class="btn btn-default btn-sm">Limpar</a>
            @endif
          </form>

              @include('layout-backend.busca_tabela')
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th style="width: 340px">Descrição</th>
                    <th style="width: 340px">Órgao</th>                  
                    <th colspan="2"><center>Ação</center></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($departamentos)
                    @foreach($departamentos as $departamento)
                      <tr>
                        <td>{{$departamento->id_departamento}}.</td>
                        <td>{{$departamento->descricao}}</td>
                        <td>{{$departamento->orgao->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('dep.edit', ['id' => $departamento->id_departamento])}}" class="btn btn-primary" role="button">Editar</a>
                            @if($usuarios->id_perfil == 1) 
                             <a href="{{route('dep.destroy', ['id' => $departamento->id_departamento])}}" class="btn btn-danger" role="button">Excluir</a>
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
                <li>{!!$departamentos->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection