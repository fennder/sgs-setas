@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('o.update', ['id'=> $orgaos->id_orgao]) }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">

  <div class="box-body clearfix">

  <div class="row">

    <div class="col-md-12">
      <div class="form-group has-feedback" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$orgaos->descricao}}" name="descricao" id="descricao" placeholder="Órgão de lotação" required>
        </div>
      </div><!-- Nome Completo -->
    </div><!-- Col 12 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar Órgão</button>
</form><!-- Form -->
@endsection