@extends('pdf.certificado_template')

@section('content')
<div class="row">

  <div class="col-md-2">
      <!-- Default box -->  
    <div class="box-header with-border" align="center">
      <div class="pull-left" align="center">
        <p></p>
      </div>
      <p><h2 class="box-title"></h2></p>
      <h3 class="box-title"></h3> 
    </div><!-- /.box -->
  </div><!-- Col 2 -->

  <div class="col-md-8">
    <!-- Default box -->
    <div>
      <div class="box-header with-border">
        <div class="pull-left" align="center">
          <p><img src="{{ asset('/imagens/presenca _setas.png') }}" alt="Secretaria do Trabalho e Assistência Social" width="55%"></p>
        </div>
      </div>
      <div class="box-body">
        <em><h2 align="center"><strong>CERTIFICADO DO PARTICIPANTE</strong></h2></em>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- Col 6 -->

  <div class="col-md-2">
    <!-- Default box -->
    <div>
      <div class="box-header with-border">
        <div class="pull-left" align="center">
          <p></p>
        </div>
      </div>
    </div><!-- /.box -->
  </div><!-- Col 2 -->
</div> <!-- Row -->

<div class="row">

  <div class="col-md-12">
    <!-- Default box -->
    <div>
      <div class="box-body">
        
        <em>
          <h2 class="text-justify"><p class=""><i class="invisible">Espaco</i>Certificamos que 
          @if($usuarios->sexo == 'Feminino')
            a Senhora
          @else
            o Senhor
          @endif
          <strong>{{$usuarios->name}}</strong>
          , participou do(a)

          <strong>
          
            {{$inscricoes->id_inscricao}}
          
          </strong>
        
          , no período de <strong>###DATA INICIO### à ###DATA TERMINO###</strong> realizado pelo Governo do Estado do Tocantins, por meio da <strong>{{$lotacao}}</strong> e parceiros.</p></h2>
        </em>
          
      </div><!-- /.box-body -->
      <div class="box-body" align="right">
        <em><h3><p>
          @if(setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'))
            Palmas, TO, {{ strftime('%d de %B de %Y')}}</p></h3></em>
          @endif
      </div>
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->

<div class="row">
  
  <div class="col-md-12">
    <!-- Default box -->
    <div>
      
      <div class="box-body" align="center">

        <em><h3><p><strong>Patrícia Rodrigues do Amaral</strong><br>
        Secretaria do Trabalho e Assistência Social</p></h3></em>
        
      </div><!-- /.box-body -->
      
      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->
@endsection