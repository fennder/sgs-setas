@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('vi.store') !!}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Vínculo Institucional</h3>
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
          <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Vinculo Institucional" required>
        </div>
      </div><!-- Vinculo Institucional -->
    </div><!-- Col 12 -->

    <div class="col-md-3" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="inicio_vinculo" id="inicio_vinculo" required>
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="text-muted">Data de Vinculo</small>
      </div><!--Data Inicio do Curso -->
    </div><!-- Col 3 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection

