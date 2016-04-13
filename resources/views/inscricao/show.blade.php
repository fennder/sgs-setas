@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Inscrições</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-primary" href="{!! route('ins.create')!!}">Novo</a>
          </br>
          </br>
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Meus Cursos</th>                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                      <tr>
                        <td>{{$curso->descricao}}</td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->
@endsection


