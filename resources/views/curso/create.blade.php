@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('cs.store') !!}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Cargo</h3>
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
          <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Curso" required>
        </div>
      </div><!-- Nome do Curso -->
    </div><!-- Col 12 -->

    <div class="col-md-4" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="data_inicio" id="data_inicio" required>
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="success" class="text-muted">Data de Inicio do Curso/Evento</small>
      </div><!--Data Inicio do Curso -->
    </div><!-- Col 4 -->

    <div class="col-md-4" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="data_termino" id="data_termino" required>
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="text-muted">Data de Término do Curso/Evento</small>
      </div><!--Data Término do Curso -->
    </div><!-- Col 4 -->

    <div class="col-md-4">
        <div class="form-group has-feedback">
        <select class="form-control" name="id_status_curso" id="id_status_curso" required>
            <option disabled selected> - Status Curso - </option>
              @foreach($scursos as $scurso)
                <option value="{{ $scurso->id_status_curso }}">{{ $scurso->descricao }}</option>
              @endforeach
          </select>
          <small class="text-muted">Status Curso/Evento</small>
      </div><!-- Curso -->
    </div><!-- Col 4 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar Curso</button>
</form><!-- Form -->
@endsection

