@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('cid.update', ['id'=>$cidades->id_cidade]) }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Cidade</h3>
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
          <input type="text" class="form-control" value="{{$cidades->nome}}" name="nome" id="nome">
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 6 -->

    <div class="col-md-4">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$cidades->cod_ibge}}" name="cod_ibge" id="cod_ibge">
        </div>
      </div><!-- Código do IBGE -->
    </div><!-- Col 4 -->

    <div class="col-md-4">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$cidades->id_estado}}" name="id_estado" id="id_estado">
        </div>
      </div><!-- Estado -->
    </div><!-- Col 4 -->

    <div class="col-md-4">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$cidades->id_regiao}}" name="id_regiao" id="id_regiao">
        </div>
      </div><!-- Região -->
    </div><!-- Col 4 -->  

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar</button>
</form><!-- Form -->
@endsection