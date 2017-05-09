@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('dep.update', ['id'=>$departamentos->id_departamento]) }}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
 
  <div class="box-body clearfix">

  <div class="row">

    <div class="col-md-12">
      <div class="form-group has-feedback">
        <small class="text-muted">Órgão</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select class="form-control" name="id_orgao" id="id_orgao" required>
            <option value="{{$departamentos->id_orgao}}">{{$departamentos->orgao->descricao}}</option>
            @foreach ($orgaos as $orgao)
              @if($departamentos->id_orgao != $orgao->id_orgao)
                <option value="{{$orgao->id_orgao}}">{{$orgao->descricao}}</option>
              @endif
            @endforeach
          </select>
        </div>
      </div><!-- Órgão -->
    </div><!-- Col 12 -->

    <div class="col-md-12">
      <div class="form-group has-feedback" >
      <small class="text-muted">Departamento</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <input type="text" class="form-control" value="{{$departamentos->descricao}}" name="descricao" id="descricao" required>
        </div>
      </div><!-- Nome do Departamento -->
    </div><!-- Col 12 -->

  </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Atualizar Departamento</button>
</form><!-- Form -->
@endsection

