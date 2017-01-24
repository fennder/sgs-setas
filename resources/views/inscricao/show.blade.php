@extends('layout-backend.admin_template')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Minhas Inscrições</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <!--  <a class="btn btn-primary" href="{!! route('ins.create')!!}">Novo</a> -->
          
              <table class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width: 50%">Meus Cursos</th>                    
                    <th>Período</th>
                    <th>Status</th>
                    <!-- <th style="width: 5%">Certificado</th>  -->                                   
                  </tr>
                </thead>
                <tbody>
                    @foreach($inscricoes as $inscricao)
                      @if($inscricao->status == "Deferido")
                        <tr class="success">
                          <td>{{$inscricao->curso->descricao}}</td> 
                          <td>( {{$inscricao->curso->data_inicio}} - {{$inscricao->curso->data_termino}} )</td> 
                          <td>{{$inscricao->status}} - {{$inscricao->motivo}}</td>
                          <!-- <td align="center">
                            <a href="{{route('ins.certificado', ['id' => $inscricao->id_inscricao])}}">
                              <img src="{{ asset('/imagens/pdf-printer.png') }}" width="55%">
                            </a>
                          </td>  -->
                        </tr>
                      @else
                        <tr class="danger">
                          <td>{{$inscricao->curso->descricao}}</td> 
                          <td>( {{$inscricao->curso->data_inicio}} - {{$inscricao->curso->data_termino}} )</td> 
                          <td>{{$inscricao->status}} - {{$inscricao->motivo}}</td> 
                        </tr>
                      @endif
                    @endforeach
                </tbody>
              </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!! $inscricoes->render() !!}</li>
              </ul>
        </div>
        <div class="box-footer clearfix">
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- Col 6 -->
  </div> <!-- Row -->
@endsection