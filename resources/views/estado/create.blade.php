@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('est.store') !!}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Estado</h3>
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
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Estado">
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 6 -->

    <div class="col-md-4">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" name="uf" id="uf" placeholder="UF">
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 4 -->

    <div class="col-md-2">
      <div class="form-group has-feedback" >
        <div class="checkbox">
          <label class="c-input c-checkbox">
            <input type="checkbox" name="status" id="status" checked="checked">Status
            <span class="c-indicator"></span>
          </label>
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 2 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection