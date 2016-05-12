@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border" align="center">
        <div class="pull-left" align="center">
          <p><img src="{{ asset('/imagens/presenca _setas.png') }}" alt="User Image" width="40%"></p>
        </div>
        <p><h2 class="box-title">{{ $curso->descricao }} - {{ $curso->data_inicio }} - {{ $curso->data_termino }}</h2></p>
        <h3 class="box-title">Lista de Presença</h3>
        
        <!-- <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div> -->
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th style="width: 10px">Nr.</th>
              <th style="width: 150px">Região</th>
              <th style="width: 200px">Município</th>
              <th style="width: 100px">Nome do Crachá</th>
              <th style="width: 100px">CPF</th>
              <th style="width: 100px">Presença Manhã</th>
              <th style="width: 100px">Presença Tarde</th>                  
            </tr>
          </thead>
          <tbody>
            
            @foreach($inscritos as $inscrito)
              <tr>
                <td>{{ $i=$i+1 }}.</td>
                <td>{{ $inscrito->cidade->regiao->descricao }}</td>
                <td>{{ $inscrito->cidade->nome }}</td>
                <td>{{ $inscrito->nome_cracha }}</td>
                <td>{{ $inscrito->cpf }}</td>
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