@extends('pdf.certificado_template')

@section('content')

{{-- FRENTE DO CERTIFICADO --}}
<div class="row">

  <div class="col-md-12">
    <!-- Default box -->
    <div>
      <div class="box-header with-border">
        <div class="pull-left" align="center">
          <p><img src="{{ asset('/imagens/logo_setas.png') }}" alt="Secretaria do Trabalho e Assistência Social" width="50%"></p>
        </div>
      </div>
      <div class="box-body">
        <em><h1 align="center"><strong>CERTIFICADO</strong></h1></em>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->

<div class="row">

  <div class="col-md-12">
    <!-- Default box -->
    <div>
      <div class="box-body">

        <em>
          <h2 class="text-justify">
            <p>
              <i class="invisible">Espaco</i>Certificamos que
              @if($usuarios->sexo == 'Feminino')
                a Senhora
              @else
                o Senhor
              @endif
              <strong>{{ $usuarios->name }}</strong>,
              participou do curso
              <strong>{{ $inscricao->curso->descricao }}</strong>,
              realizado no período de
              <strong>{{ \Carbon\Carbon::parse($inscricao->curso->data_inicio)->format('d/m/Y') }}</strong>
              a
              <strong>{{ \Carbon\Carbon::parse($inscricao->curso->data_termino)->format('d/m/Y') }}</strong>,
              pelo Governo do Estado do Tocantins, por meio da <strong>{{ $lotacao }}</strong> e parceiros.
            </p>
          </h2>
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

        <em><h3><p><strong></strong><br>
        Secretario(a) do Trabalho e Desenvolvimento Social</p></h3></em>

      </div><!-- /.box-body -->

      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->

{{-- VERSO DO CERTIFICADO --}}
<div style="page-break-before: always;"></div>

<div class="row">

  <div class="col-md-12">
    <!-- Default box -->
    <div>
      <div class="box-header with-border">
        <div class="pull-left" align="center">
          <p><img src="{{ asset('/imagens/logo_setas.png') }}" alt="Secretaria do Trabalho e Assistência Social" width="50%"></p>
        </div>
      </div>
      <div class="box-body">
        <em><h1 align="center"><strong>CONTEÚDO PROGRAMÁTICO</strong></h1></em>
        <em><h3 align="center"><strong>{{ $inscricao->curso->descricao }}</strong></h3></em>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->

<div class="row">

  <div class="col-md-12">
    <!-- Default box -->
    <div>
      <div class="box-body">
        @forelse($inscricao->curso->modulo as $modulo)
          <em><h3><p><strong>{{ $modulo->descricao }}</strong></p></h3></em>
          <div class="text-justify">
            <em>{!! $modulo->conteudo !!}</em>
          </div>
          <hr>
        @empty
          <em><h3><p class="text-justify">Não há conteúdo programático cadastrado para este curso.</p></h3></em>
        @endforelse
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- Col 12 -->

</div> <!-- Row -->

@endsection
