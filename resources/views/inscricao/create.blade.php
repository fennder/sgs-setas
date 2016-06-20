@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('ins.store') !!}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Inscrever em Curso</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

  <div class="row">

      <div class="col-md-3">
        <small class="text-muted">Nome do Inscrito</small>
        <div class="form-group has-feedback">
        <select class="form-control" name="user_id" id="user_id" required>
          <option  value="{{$usuarios->id}}">{{$usuarios->name}}</option>
        </select>

      </div><!-- Curso -->
    </div><!-- Col 3 -->

    <div class="col-md-9">
        <small class="text-muted">Curso</small>
        <div class="form-group has-feedback">
        <select class="form-control" name="curso_id" id="curso_id" required>
          <option disabled selected value=""> - Escolha um curso - </option>
            @foreach($cursos as $curso)
              @if(!($usuarios->cursos->find($curso->id_curso) != null))
                @if($curso->statuscurso->id_status_curso == 1)
                  <option value="{{ $curso->id_curso }}">{{ $curso->descricao }} -( {{ $curso->data_inicio }} - {{ $curso->data_termino }} ) - {{$curso->statuscurso->descricao}}</option>
                @endif
              @endif
            @endforeach
        </select>

      </div><!-- Curso -->
    </div><!-- Col 9 -->

  </div><!-- row -->

  </div>
</div>
  <input type="hidden" class="form-control" name="status" value="Deferido" id="status">
  <input type="hidden" class="form-control" name="motivo" value="Sem alteração" id="status">
  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection

