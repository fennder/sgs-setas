@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('ins.update',['id'=>$inscricoes->id_inscricao]) }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Inscrições</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

  <div class="row">
    <div class="col-md-6">
      <small class="text-muted">Nome do Inscrito</small>
        <div class="form-group has-feedback">
          <input disabled type="text" class="form-control" name="nome_cracha" id="nome_cracha"value="{{$inscricoes->usuario->name}}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div><!-- Nome Crachá -->
    </div><!-- Col 6 -->

      <div class="col-md-6">
      <small class="text-muted">Status do inscrito</small>
      <div class="form-group has-feedback">

        <select class="form-control" name="status" id="status">
          <option value="{{$inscricoes->status}}">{{$inscricoes->status}}</option>
            @if($inscricoes->status == "Deferido")
              <option value="Indeferido">Indeferido</option>
            @else
              <option value="Deferido">Deferido</option>
            @endif
        </select>

      </div> <!-- Col 6 -->

        <!-- <div class="form-group has-feedback">
          <select disabled class="form-control" name="user_id" id="user_id">       
            <option  value="{{$inscricoes->user_id}}">{{$inscricoes->usuario->name}}</option>
          </select>
        </div><!-- Curso -->
    </div><!-- Col 3 -->
  </div>

  <div class="row">

    <div class="col-md-12">
      <small class="text-muted">Curso</small>
      <div class="form-group has-feedback">

        <select disabled class="form-control" name="curso_id" id="curso_id" required>
          <option value="{{ $inscricoes->curso->id_curso }}">{{ $inscricoes->curso->descricao }} - ( {{$inscricoes->curso->data_inicio}} - {{$inscricoes->curso->data_termino}} ) - {{$inscricoes->curso->statuscurso->descricao}}</option>   
            @foreach($cursos as $curso)
              @if($usuarios->cursos->find($curso->id_curso) != null)
                @if($curso->statuscurso->id_status_curso == 1)
                  <option value="{{ $curso->id_curso }}">{{ $curso->descricao }} - ( {{$curso->data_inicio}} - {{$curso->data_termino}} ) - {{$curso->statuscurso->descricao}}</option>
                @endif
              @endif
            @endforeach
        </select>

      </div><!-- Curso -->
    </div><!-- Col 9 -->

    <div class="col-md-8">
      <!-- textarea -->
      <div class="form-group">
        <small class="text-muted">Motivo</small>
        <textarea class="form-control" rows="4" name="motivo" id="motivo" placeholder="Digite aqui o motivo ... " value="{{ $inscricoes->motivo }}">{{ $inscricoes->motivo }}</textarea>
      </div>
    </div>

    <div class="col-md-4">
      <small class="text-muted">Alterado por</small>
      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" value="{{ $usuarios->nome_cracha }}" name="login" id="login">
        {{ $inscricoes->login }}
      </div><!-- Login -->

      <small class="text-muted">Alterado em</small>
      <div class="form-group has-feedback">
        {{ $inscricoes->updated_at }}
      </div><!-- data alteração -->

    </div><!-- Col 4 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar Inscrição</button>
  <a class="btn btn-success" href="{{route('u.edit', ['id' => $inscricoes->user_id])}}">Editar Usuário</a><!-- colocar a rota do user/edir e passar inscricao->user_id -->

</form><!-- Form -->
@endsection

