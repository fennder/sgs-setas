@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de Presença</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        </br>
        </br>
        <table class="table table-bordered table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th style="width: 10px">Nr.</th>
              <th>Região</th>
              <th>Município</th>
              <th>Nome</th>
              <th>CPF</th>
              <th style="width: 40px" colspan="6">Assinatura</th>                   
            </tr>
          </thead>
          <tbody>
            
              @foreach($cursos as $curso)
                  <tr>
                    <td>{{ $i=$i+1 }}.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
              @endforeach
           
          </tbody>
        </table>
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
              
            </ul>
      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- Col 8 -->
</div> <!-- Row -->

@endsection