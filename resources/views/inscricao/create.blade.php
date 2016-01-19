@extends('layout-backend.admin_template')

@section('content')

<div class="box-body clearfix">

  <form action="{!! route('i.store') !!}" method="POST">
    {!! csrf_field() !!}
    
    <div class="row">
  
      <div class="col-md-5">
        <div class="form-group has-feedback" >
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- Nome Completo -->
      </div><!-- Col 5 -->

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nome_cracha" id="nome_cracha" placeholder="Nome do Crachá">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- Nome Crachá -->
      </div><!-- Col 4 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="sexo" id="sexo">
            <option>Sexo</option>
            <option>F</option>
            <option>M</option>
          </select>
        </div> <!-- Sexo -->
      </div><!-- Col 3 -->

    </div><!-- row -->

    <div class="row">
    
      <div class="col-md-6">
        <div class="form-group has-feedback">
        <div class="input-group">
          <span class="input-group-addon">@</span>
          <input type="email" class="form-control" name="email_pessoal" id="email_pessoal" placeholder="e-mail@pessoal.com">
          <span class="glyphicon glyphicon-send form-control-feedback"></span>
          </div>
        </div><!-- Email pessoal -->
      </div><!-- Col 6 -->

      <div class="col-md-6">
        <div class="form-group has-feedback">
          <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="email" class="form-control" name="email_institucional" id="email_institucional" placeholder="e-mail@setas.to.gov.br">
            <span class="glyphicon glyphicon-send form-control-feedback"></span>
          </div>
        </div><!-- Email trabalho -->
      </div><!-- Col 6 -->

    </div><!-- row -->

    <div class="row">
    
      <div class="col-md-3">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="cep" id="cep" placeholder="77.100-100">
          <span class="glyphicon glyphicon-home form-control-feedback"></span>
        </div><!-- CEP -->
      </div>

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
            <option>Cidade</option>
            <option>Palmas</option>
            <option>Taguatinga</option>
          </select>
        </div><!-- Cidade -->
      </div><!-- Col 4 -->

      <div class="col-md-3">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado" id="id_estado">
            <option>Estado</option>
            <option>TOCANTINS</option>
            <option>RIO GRANDE DO SUL</option>
          </select>
        </div><!-- Estado -->
      </div><!-- Col 3 -->

    </div><!-- row -->

    <div class="row">
    
      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="telefone_pessoal" id="telefone_pessoal" placeholder="(00)0000-0000">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div><!-- Telefone Pessoal -->
      </div>

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="telefone_institucional" id="telefone_institucional" placeholder="(00)0000-0000">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div><!-- Telefone Trabalho -->
      </div>

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <select class="form-control" name="id_escolaridade" id="id_escolaridade">
            <option>Escolaridade</option>
            <option>ALFABETIZADO</option>
            <option>ENSINO FUNDAMENTAL INCOMPLETO</option>
            <option>ENSINO FUNDAMENTAL COMPLETO</option>
            <option>ENSINO MÉDIO INCOMPLETO</option>
          </select>
        </div><!-- Escolaridade -->
      </div>

    </div><!-- row -->

    <div class="row">

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- CPF -->

      </div><!-- Col 4 -->

      <div class="col-md-4" >
        <div class="form-group has-feedback">
            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="00">
            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          </div><!--Data Nascimento -->
        </div><!-- Col 4 -->

        <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- Identidade -->

      </div><!-- Col 4 -->

    </div><!-- row -->

    <div class="row">

      <div class="col-md-4">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="rg" id="rg" placeholder="Identidade">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- Identidade -->

      </div><!-- Col 4 -->
    
      <div class="col-md-4" >  

        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="orão_emissor" id="orgao_emissor" placeholder="Órgão Emissor">
          <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
        </div><!-- Órgão Emissor -->
        
      </div><!-- Col 4 -->

      <div class="col-md-4" >  

        <div class="form-group has-feedback">
          <select class="form-control" name="id_estado_rg" id="id_estado_rg">
            <option>Estado do RG</option>
            <option>Palmas</option>
            <option>Taguatinga</option>
          </select>
        </div><!-- Estado do RG -->
        
      </div><!-- Col 4 -->

    </div><!-- row -->

    <div class="row">
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary btn-block">Inscrever</button>
      </div>
    
    </div>

  </form><!-- Form -->

</div>  


@endsection

<!-- 
  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
-->