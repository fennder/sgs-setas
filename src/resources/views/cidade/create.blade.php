@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('cid.store') }}" method="POST">
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
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Estado" required>
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 6 -->

    <div class="col-md-4">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" name="cod_ibge" id="cod_ibge" placeholder="Código do IBGE" required>
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 4 -->

    <div class="col-md-6">
        <div class="form-group has-feedback">
        <select class="form-control" name="id_estado" id="id_estado" required>
            <option disabled selected> - Estado - </option>
              @foreach($estados as $estado)
                <option value="{{ $estado->id_estado }}">{{ $estado->nome }}</option>
              @endforeach
          </select>
          <small class="text-muted">Estado</small>
      </div><!-- Curso -->
    </div><!-- Col 6 -->

    <div class="col-md-6">
        <div class="form-group has-feedback">
        <select class="form-control" name="id_regiao" id="id_regiao" required>
            <option disabled selected> - Regiao - </option>
              @foreach($regioes as $regiao)
                <option value="{{ $regiao->id_regiao }}">{{ $regiao->descricao }}</option>
              @endforeach
          </select>
          <small class="text-muted">Região</small>
      </div><!-- Curso -->
    </div><!-- Col 6 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar Cidade</button>
</form><!-- Form -->
@endsection