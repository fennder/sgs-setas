  @extends('layout-backend.admin_template')

  @section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <!-- <div class="box-header with-border">
        <h3 class="box-title">Lista de Inscrições</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div> -->
      <div class="box-body">
        
        <form action="{!! route('ins.index') !!}" method="POST">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="row">
            <div class="col-md-10">
            <!-- <small class="text-muted">Escolha o curso para obter a relação</small> -->
              <div class="form-group has-feedback">
                <select class="form-control" name="id_curso" id="id_curso" required>
                  <option value=""> --- SELECIONE O CURSO E TENHA A RELAÇÃO DE INSCRITOS AQUI --- </option>
                    
                    @foreach($cursos as $curso)
                      @if($curso->statuscurso->id_status_curso == 1 || $curso->statuscurso->id_status_curso == 5)    
                        <option value="{{$curso->id_curso}}">
                          {{$curso->descricao}} - ( {{ $curso->data_inicio }} - {{ $curso->data_termino }} ) - {{ $curso->statuscurso->descricao }}
                        </option>
                      @endif  
                    @endforeach
                  
                </select>
              </div><!-- Curso -->
            </div><!-- Col 10 -->
            <input type="submit" class="btn btn-primary" value="Buscar"></input>
          </div>

        </form> 
        <table class="table table-bordered table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th style="width: 3%">Nr.</th>
              <th style="width: 10%">Região</th>
              <th style="width: 22%">Município</th>
              <th style="width: 28%">Inscrito</th>
              <th style="width: 12%">Contato</th>
              <th style="width: 50%">Função</th>
              <!-- <th>Status</th> -->
              <th colspan="2"><center>Ação</center></th>
            </tr>
          </thead>
          <tbody>

            @foreach($inscricoes as $inscricao)

              @if($inscricao->curso->id_status_curso == 1 || $inscricao->curso->id_status_curso == 5)
                
                @if($inscricao->status == "Deferido")

                <tr class="success">

                  @if($inscricao->usuario)

                    <td>{{ $i=$i+1 }}</td>
                    <td>{{$inscricao->usuario->cidade->regiao->descricao}}</td>
                    <td>{{$inscricao->usuario->cidade->nome}}</td>
                    <td>{{$inscricao->usuario->name}}</td>
                    <td>{{$inscricao->usuario->telefone_trabalho}}</td>
                    <td>{{$inscricao->usuario->funcao->descricao}}</td>

                  @endif

                  @if($usuarios->id_perfil == 2)
   
                    <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>
                    <!-- <td class="text-center">
                      <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}" class="btn btn-outline btn-danger" title="Deseja realmente excluir o projeto?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir</a>
                    </td> -->

                  @elseif($usuarios->id_perfil == 1)

                    <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>
                    <!-- <td class="text-center">
                      <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}" class="btn btn-outline btn-danger" title="Deseja realmente excluir o projeto?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir</a>
                    </td> -->

                  @endif
                </tr>
                @else

                  <tr class="danger">

                    @if($inscricao->usuario)

                      <td>{{ $i=$i+1 }}</td>
                      <td>{{$inscricao->usuario->cidade->regiao->descricao}}</td>
                      <td>{{$inscricao->usuario->cidade->nome}}</td>
                      <td>{{$inscricao->usuario->name}}</td>
                      <td>{{$inscricao->usuario->telefone_trabalho}}</td>
                      <td>{{$inscricao->usuario->funcao->descricao}}</td>
                      
                    @endif

                    @if($usuarios->id_perfil == 2)

                      <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>
                    <td class="text-center">
                      <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}" class="btn btn-outline btn-danger" title="Deseja realmente excluir o projeto?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir</a>
                    </td>

                    @elseif($usuarios->id_perfil == 1)

                      <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}" class="btn btn-primary" role="button">Editar</a>
                    </td>
                    <td class="text-center">
                      <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}" class="btn btn-outline btn-danger" title="Deseja realmente excluir o projeto?" data-toggle="confirmation" data-singleton="true" data-popout="true">Excluir</a>
                    </td>

                    @endif
                  </tr>
                @endif

              @endif

            @endforeach

          </tbody>
        </table>
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li>{!!$inscricoes->render()!!}</li>
        </ul>
      </div>
    </div><!-- /.box -->
  </div><!-- Col 6 -->
</div> <!-- Row -->
@endsection