@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('ins.store') !!}" method="POST">
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
        <div class="form-group has-feedback">
        <select class="form-control" name="id_curso" id="id_curso">
            <option disabled selected> - Curso - </option>
              @foreach($cursos as $curso)
                <option value="{{ $curso->id_curso }}">{{ $curso->descricao }}</option>
              @endforeach
          </select>
          <small class="text-muted">Curso</small>
      </div><!-- Curso -->
    </div><!-- Col 6 -->

    <div class="col-md-6">
        <div class="form-group has-feedback">
        <select class="form-control" name="id_usuario" id="id_usuario">
            <option disabled selected> - Inscrito - </option>
              @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id_usuario }}">{{ $usuario->nome_cracha }}</option>
              @endforeach
          </select>
          <small class="text-muted">Nome do Inscrito</small>
      </div><!-- Curso -->
    </div><!-- Col 6 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection

