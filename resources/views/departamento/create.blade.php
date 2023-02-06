@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('dep.store') }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">

  <div class="box-body clearfix">

  <div class="row">

  <div class="col-md-12">
        <div class="form-group has-feedback">
        <small class="text-muted">Órgão</small>
        <select class="form-control" name="id_orgao" id="id_orgao" required>
            <option disabled selected> - Orgao - </option>
              @foreach($orgaos as $orgao)
                <option value="{{ $orgao->id_orgao }}">{{ $orgao->descricao }}</option>
              @endforeach
          </select>
      </div><!-- Curso -->
    </div><!-- Col 12 -->

    <div class="col-md-12">
      <div class="form-group has-feedback" >
        <small class="text-muted">Departamento</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Departamento" required>
        </div>
      </div><!-- Nome Departamento -->
    </div><!-- Col 12 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Cadastrar Departamento</button>
</form><!-- Form -->
@endsection

