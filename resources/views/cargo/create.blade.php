@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('c.store') !!}" method="POST" enctype="multipart/form-data">
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
          <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Cargo ocupado">
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 12 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar</button>
</form><!-- Form -->
@endsection

<!-- 
  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
  <input type="file" class="form-control" name="foto" value="{{ old('foto') }}/>
-->