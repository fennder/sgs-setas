  @extends('layout-backend.admin_template')

  @section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de Inscrições</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        
        <form action="{!! route('ins.index') !!}" method="POST">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group has-feedback">
                <select class="form-control" name="id_curso" id="id_curso" required>
                  <option  value="">- Para obter a relação de inscritos selecione o curso aqui -</option>
                  @foreach($cursos as $curso)
                    <option  value="{{$curso->id_curso}}">{{$curso->descricao}} - ( {{ $curso->data_inicio }} - {{ $curso->data_termino }} ) - {{ $curso->statuscurso->descricao }}</option>
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
              <th>Nr.</th>
              <th>Município</th>
              <th>Inscrito</th>
              <th>CPF</th>
              <th>E-mail</th>
              <th>Função</th>
              <th>Status do Inscrito</th>
              <th style="width: 50px" colspan="4"><center>Ação</center></th>
            </tr>
          </thead>
          <tbody>
            @foreach($inscricoes as $inscricao)
              @if($inscricao->status == "Deferido")
              <tr class="success">
                <td>{{ $i=$i+1 }}</td>
                <td>{{$inscricao->usuario->cidade->nome}}</td>
                <td>{{$inscricao->usuario->name}}</td>
                <td>{{$inscricao->usuario->cpf}}</td>
                <td>{{$inscricao->usuario->email}}</td>
                <td>{{$inscricao->usuario->funcao->descricao}}</td>
                <td>{{$inscricao->status}}</td>
                
                @if($usuarios->id_perfil == 2)
                  <td class="text-center">
                    <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                    <!-- <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-trash"></i></a> -->
                  </td>
                @elseif($usuarios->id_perfil == 1)
                  <td class="text-center">
                    <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                @endif
              </tr>
              @else
                <tr class="danger">
                  <td>{{ $i=$i+1 }}</td>
                  <td>{{$inscricao->usuario->cidade->nome}}</td>
                  <td>{{$inscricao->usuario->name}}</td>
                  <td>{{$inscricao->usuario->cpf}}</td>
                  <td>{{$inscricao->usuario->email}}</td>
                  <td>{{$inscricao->usuario->funcao->descricao}}</td>
                  <td>{{$inscricao->status}}</td>
                 
                  @if($usuarios->id_perfil == 2)
                    <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                      <!-- <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-trash"></i></a> -->
                    </td>
                  @elseif($usuarios->id_perfil == 1)
                    <td class="text-center">
                      <a href="{{route('ins.edit', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="{{route('ins.destroy', ['id' => $inscricao->id_inscricao])}}"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                  @endif
                </tr>
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