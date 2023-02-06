@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        
        <div class="box-body">
          <a class="btn btn-primary" href="{{ route('cid.create')}}">Incluir Cidade</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Nome</th>
                    <th>Cód. IBGE</th> 
                    <th>Estado</th>
                    <th>Região</th>               
                    <th style="width: 40px" colspan="2"><center>Ação</center></th>                    
                  </tr>
                </thead>
                <tbody>
                  @if($cidades)
                    @foreach($cidades as $cidade)
                      
                      <tr>
                        <td>{{$cidade->id_cidade}}.</td>
                        <td>{{$cidade->nome}}</td>
                        <td>{{$cidade->cod_ibge}}</td>
                        <td>{{$cidade->estado->nome}}</td>
                        <td>{{$cidade->regiao->descricao}}</td>
                        <td class="text-center">
                          <a href="{{route('cid.edit', ['id' => $cidade->id_cidade])}}" class="btn btn-primary" role="button">Editar</a>
                          <!-- <a href="{{route('cid.destroy', ['id' => $cidade->id_cidade])}}" class="btn btn-primary" role="button">Excluir</a> -->
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
                <li>{!!$cidades->render()!!}</li>
              </ul>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->

@endsection