@extends('layout-backend.admin_template')

@section('content')
<form action="{!! route('i.update') !!}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Dados Pessoais do Inscrito</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

  <div class="row">

    <div class="col-md-7">
      <div class="form-group has-feedback" >
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Nome Completo -->
    </div><!-- Col 7 -->

    <div class="col-md-5">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nome_cracha" id="nome_cracha" placeholder="Nome do Crachá">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Nome Crachá -->
    </div><!-- Col 5 -->

  </div><!-- row -->

  <div class="row">

    <div class="col-md-4">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- CPF -->
    </div><!-- Col 4 -->

    <div class="col-md-3" >
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <small class="text-muted">Data de Nascimento</small>
      </div><!--Data Nascimento -->
    </div><!-- Col 3 -->

    <div class="col-md-5">
      <div class="form-group has-feedback">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="email" class="form-control" name="email_pessoal" id="email_pessoal" placeholder="e-mail@pessoal.com">
        </div>
      </div><!-- Email pessoal -->
    </div><!-- Col 5 -->

  </div><!-- row -->

  <div class="row">

    <div class="col-md-4">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="rg" id="rg" placeholder="Identidade">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Identidade -->
    </div><!-- Col 4 -->
    
     <div class="col-md-3" >  
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="orão_emissor" id="orgao_emissor" placeholder="Órgão Emissor">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Órgão Emissor -->
    </div><!-- Col 3 -->

    <div class="col-md-2">
        <div class="form-group has-feedback">
        <select class="form-control" name="id_estado_rg" id="id_estado_rg">
            <option disabled selected> - UF - </option>
              @foreach ($estado_rgs as $estado_rg)
                <option>{{ $estado_rg }}</option>
              @endforeach
          </select>
          <small class="text-muted">Estado do RG</small>
      </div><!-- UF Emissor -->
      </div><!-- Col 2 -->

    <div class="col-md-3">
      <div class="form-group has-feedback">
        <select class="form-control" name="sexo" id="sexo">
          <option disabled selected> - Sexo - </option>
          <option>F</option>
          <option>M</option>
        </select>
      </div> <!-- Sexo -->
    </div><!-- Col 3 -->

  </div><!-- row -->

  <div class="row">
    
    <div class="col-md-3">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="cep" id="cep" placeholder="77.100-100" >
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
        <small class="text-muted">CEP residêncial</small>
      </div><!-- CEP -->
    </div><!-- Col 3 -->

    <div class="col-md-9">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Quadra 110 Norte, Alamenda">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Endereço -->
    </div><!-- Col 9 -->

  </div><!-- row -->

  <div class="row">
      
    <div class="col-md-5">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Plano Diretor">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Complemento -->
    </div><!-- Col 5 -->

    <div class="col-md-4">
      <div class="form-group has-feedback">
        <select class="form-control" name="id_cidade" id="id_cidade">
          <option disabled selected> - Cidade - </option>
            @foreach ($cidades as $cidade)
              <option>{{ $cidade }}</option>
            @endforeach
        </select>
      </div><!-- Cidade -->
    </div><!-- Col 4 -->

    <div class="col-md-3">
      <div class="form-group has-feedback">
        <select class="form-control" name="id_estado" id="id_estado">
          <option disabled selected> - Estado - </option>
            @foreach ($estados as $estado)
              <option>{{ $estado }}</option>
            @endforeach
        </select>
      </div><!-- Estado -->
    </div><!-- Col 3 -->

  </div><!-- row -->

  <div class="row">

    <div class="col-md-3">
      <div class="form-group has-feedback input-group">
      <div class="input-group-addon">
        <i class="fa fa-phone"></i>
      </div>
        <input data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_pessoal" id="telefone_pessoal" placeholder="(00)0000-0000">
      </div><!-- Telefone Pessoal -->
    </div> <!-- Col 3-->

    <div class="col-md-5">
      <div class="form-group has-feedback">
        <select class="form-control" name="id_escolaridade" id="id_escolaridade">
          <option disabled selected> - Escolaridade - </option>
          @foreach ($escolaridades as $escolaridade)
            <option>{{ $escolaridade }}</option>
          @endforeach
        </select>
      </div><!-- Escolaridade -->
    </div><!-- Col 5 -->

    <div class="col-md-4">
      <div class="form-group">
        <input class="form-control" type="file" class="form-control-file" name="foto" id="foto">
        <small class="text-muted">Foto do Inscrito</small>
      </div>
    </div><!-- Col 4 -->

  </div><!-- row -->

</div>
</div>
<!-- Box formulario dados institucionais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Dados Profissionais do Inscrito</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>

  <div class="box-body clearfix">

    <div class="row">    

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <small class="text-muted">Número de Identificação Social</small>
        </div><!-- NIS -->
      </div><!-- Col 4 -->

      <div class="col-md-3" >
        <div class="form-group has-feedback">
          <input type="date" class="form-control" name="inicio_servico" id="inicio_servico">
          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          <small class="text-muted">Data de Início no Serviço</small>
        </div><!--Data Nascimento -->
      </div><!-- Col 3 -->

      <div class="col-md-5">
        <div class="form-group has-feedback">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" value="{{ old('email_institucional') }}" name="email_institucional" id="email_institucional" placeholder="e-mail@setas.to.gov.br">
          </div>
        </div><!-- Email trabalho -->
      </div><!-- Col 5 -->
    
    </div><!-- row -->

    <div class="row">

      <div class="col-md-3">
        <div class="form-group has-feedback input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_institucional" id="telefone_institucional" placeholder="(00)0000-0000">
        </div><!-- Telefone Trabalho -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_cidade" id="id_cidade">
            <option disabled selected> - Perfil - </option>
              @foreach ($cidades as $cidade)
                <option>{{ $cidade }}</option>
              @endforeach
          </select>
        </div><!-- Cidade -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado" id="id_estado">
            <option disabled selected> - Vinculo - </option>
              @foreach ($estados as $estado)
                <option>{{ $estado }}</option>
              @endforeach
          </select>
        </div><!-- Estado -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado" id="id_estado">
            <option disabled selected> - Órgão - </option>
              @foreach ($estados as $estado)
                <option>{{ $estado }}</option>
              @endforeach
          </select>
        </div><!-- Estado -->
      </div><!-- Col 3 -->

    </div><!-- row -->

    <div class="row">

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_cidade" id="id_cidade">
            <option disabled selected> - Departamento - </option>
              @foreach ($cidades as $cidade)
                <option>{{ $cidade }}</option>
              @endforeach
          </select>
        </div><!-- Cidade -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_cidade" id="id_cidade">
            <option disabled selected> - Cargo - </option>
              @foreach ($cidades as $cidade)
                <option>{{ $cidade }}</option>
              @endforeach
          </select>
        </div><!-- Cidade -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado" id="id_estado">
            <option disabled selected> - Função - </option>
              @foreach ($estados as $estado)
                <option>{{ $estado }}</option>
              @endforeach
          </select>
        </div><!-- Estado -->
      </div><!-- Col 3 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado" id="id_estado">
            <option disabled selected> - Órgão - </option>
              @foreach ($estados as $estado)
                <option>{{ $estado }}</option>
              @endforeach
          </select>
        </div><!-- Estado -->
      </div><!-- Col 3 -->

    </div><!-- row -->

  </div>
</div>

  <button type="submit" class="btn btn-primary btn-large">Inscrever</button>
</form><!-- Form -->
@endsection

<!-- 
  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
  <input type="file" class="form-control" name="foto" value="{{ old('foto') }}/>
-->