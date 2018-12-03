@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border" align="center">
        <div class="pull-left" align="center">
          <p><img src="{{ asset('/imagens/logo_setas.png') }}" alt="User Image" width="50%"></p>
        </div>
        <p><h2 class="box-title">{{ $curso->descricao }} - {{ $curso->data_inicio }} - {{ $curso->data_termino }}</h2></p>
        <h3 class="box-title">Lista de Presença - Data: ____/__________/______ - Período: Manhã (__) ou Tarde (__)</h3>
        
        <!-- <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div> -->
      
      </div>

      <div class="box-body">
        <table border="3" class="table table-bordered table-striped table-hover table-condensed">
          
          <thead>
            <tr>
              <th style="width: 2%">Nr.</th>
              <th>Regional</th>
              <th>Município</th>
              <th>Nome do Inscrito</th>
              <th style="width: 16%">CPF</th>
              <th style="width: 200px">Assinatura</th>
            </tr>
          </thead>

          <tbody>
          
            <!-- Trecho solucionado pelo Belo Programador Luan Gomes -->
            @foreach($inscritos as $inscrito)
              @foreach($inscricoes as $inscricao)
                @if($inscrito->pivot->curso_id == $inscricao->curso_id && $inscrito->pivot->user_id == $inscricao->user_id)
                  @if($inscricao->status == "Deferido")
                    <tr>
                      <td>{{ $i=$i+1 }}.</td>
                      <td>{{ $inscrito->cidade->regiao->descricao }}</td>
                      <td>{{ $inscrito->cidade->nome }}</td>
                      <td>{{ $inscrito->name }}</td>
                      <td>{{ $inscrito->cpf }}</td>
                      <td></td>
                    </tr>
                  @endif
                @endif
              @endforeach
            @endforeach

          </tbody>

        </table>

      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
        <li></li>
        </ul>
      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- Col 8 -->
</div> <!-- Row -->

@endsection