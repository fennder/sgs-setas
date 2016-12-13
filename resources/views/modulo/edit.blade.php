@extends('layout-backend.admin_template')

@section('content')
<form action="{{route('m.update', ['id' => $modulos->id_modulo])}}" method="POST">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Módulo</h3>
    <!-- <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div> -->
  </div>

  <div class="box-body clearfix">

    <div class="row">

      <div class="col-md-6">
        <div class="form-group has-feedback" >
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <input type="text" class="form-control" value="{{ $modulos->descricao }}" name="descricao" id="descricao" required>
          </div>
          <small class="text-muted">Nome do Modulo</small>
        </div><!-- Nome do Módulo -->
      </div><!-- Col 6 -->

      <div class="col-md-6">
        <div class="form-group has-feedback">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_curso" id="id_curso" required>
              <option value="{{$modulos->id_curso}}">{{$modulos->curso->descricao}}</option>
              @foreach ($cursos as $curso)
                @if($modulos->id_curso != $curso->id_curso)
                  <option value="{{$curso->id_curso}}">{{$curso->descricao}} - {{$curso->statuscurso->descricao}}</option>
                @endif
              @endforeach
            </select>
          </div><!-- Input -->
          <small class="text-muted">Nome do Curso</small>
        </div><!-- Form -->
      </div><!-- Col 6 -->
    </div><!-- row -->    
  </div>
</div>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Digite aqui o conteúdo do Módulo
      <small>texto</small>
    </h3>
    <!-- tools box -->
    <!-- <div class="pull-right box-tools">
      <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div> -->
    <!-- /. tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body pad">
    
      <textarea value="{{ $modulos->conteudo }}" name="conteudo" id="conteudo" onKeyPress class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $modulos->conteudo }}</textarea>
    
  </div>
</div><!--box -->

  <button type="submit" class="btn btn-primary btn-large">Atualizar Módulo</button>
</form><!-- Form -->
@endsection