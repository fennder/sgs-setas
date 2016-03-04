@extends('layout-backend.admin_template')

@section('content')
<form action="{{route('m.update', ['id' => $modulos->id_modulo])}}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Cargos</h3>
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
          <input type="text" class="form-control" value="{{ $modulos->descricao }}" name="descricao" id="descricao">
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 12 -->

    <div class="col-md-12">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" name="id_curso" id="id_curso" value="{{$modulos->id_curso}}">
        </div>
      </div><!-- Módulo -->
    </div><!-- Col 12 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar</button>
</form><!-- Form -->
@endsection

<!-- 
  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
  <input type="file" class="form-control" name="foto" value="{{ old('foto') }}/>
-->