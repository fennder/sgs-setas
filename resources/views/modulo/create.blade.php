@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('m.store') }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Módulo</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

    <div class="row">

      <div class="col-md-6">
        <div class="form-group has-feedback" >
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Módulo do Curso" required>
          </div>
        </div><!-- Módulo -->
      </div><!-- Col 6 -->

      <div class="col-md-6">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_curso" id="id_curso" required>
            <option disabled selected> - Nome do Curso - </option>
              @foreach($cursos as $curso)
                <option value="{{ $curso->id_curso }}">{{ $curso->descricao }}</option>
              @endforeach
          </select>
          <small class="text-muted">Curso</small>
        </div><!-- Curso -->
      </div><!-- Col 6 -->
    </div><!-- row -->
  </div><!-- box Body -->
</div><!-- box -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Digite aqui o conteúdo do Módulo
      <small>texto</small>
    </h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body pad">
    
      <textarea name="conteudo" id="conteudo" class="textarea" onKeyPress placeholder="Digite aqui o conteúdo do módulo" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    
  </div>
</div><!--box -->

  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection

