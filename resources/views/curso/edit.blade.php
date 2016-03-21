@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('cs.update', ['id'=>$cursos->id_curso]) !!}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Curso</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

  <div class="row">

    <div class="col-md-12">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$cursos->descricao}}" name="descricao" id="descricao" placeholder="Curso">
        </div>
      </div><!-- Nome do Curso -->
    </div><!-- Col 12 -->

    <div class="col-md-3" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" value="{{$cursos->data_inicio}}" name="data_inicio" id="data_inicio">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="text-muted">Data de Inicio</small>
      </div><!--Data Inicio do Curso -->
    </div><!-- Col 3 -->

    <div class="col-md-3" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" value="{{$cursos->data_termino}}" name="data_termino" id="data_termino">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="text-muted">Data de Término</small>
      </div><!--Data Término do Curso -->
    </div><!-- Col 3 -->

    <div class="col-md-6">
      <div class="form-group has-feedback">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select class="form-control" name="id_status_curso" id="id_status_curso">
            <option value="{{$cursos->id_status_curso}}">{{$cursos->statuscurso->descricao}}</option>
            @foreach ($scursos as $scurso)
              @if($cursos->id_status_curso != $scurso->id_status_curso)
                <option value="{{$scurso->id_status_curso}}">{{$scurso->descricao}}</option>
              @endif
            @endforeach
          </select>
        </div>
        <small class="text-muted">Status do Curso</small>
      </div><!-- Órgão -->
    </div><!-- Col 6 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar</button>
</form><!-- Form -->
@endsection

