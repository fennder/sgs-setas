@extends('layout-backend.admin_template')

@section('content')
 
<div class="box-body">
    {!! Form::open(['route'=>'i.store']) !!}
  <div class="row">

    <div class="col-md-6">
      <div class="form-group has-feedback" >
        {!! Form::text('nome', null, ['class'=> 'form-control', 'id'=> 'nome', 'placeholder' => 'Nome Completo']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- Nome Completo -->
    </div><!-- Col 6 -->

    <div class="col-md-4">
      <div class="form-group has-feedback">
        {!! Form::text('nome_cracha', null, ['class'=> 'form-control span6', 'id'=> 'nome_cracha', 'placeholder' => 'Nome Crachá']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- Nome Crachá -->
    </div><!-- Col 4 -->

    <div class="col-md-2">
      <div class="form-group has-feedback">
        {!! Form::text('sexo', null, ['class'=> 'form-control', 'id'=> 'sexo', 'placeholder' => 'Sexo']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div> <!-- Sexo -->
    </div><!-- Col 2 -->

  </div>

  <div class="row">
    
    <div class="col-md-6">
      <div class="form-group has-feedback">
        {!! Form::email('email_pessoal', null, ['class' => 'form-control','id' => 'email_pessoal', 'placeholder' => 'Email@gmail.com']) !!}
        <span class="glyphicon glyphicon-send form-control-feedback"></span>
      </div><!-- Email pessoal -->
    </div><!-- Col 6 -->

    <div class="col-md-6">
      <div class="form-group has-feedback">
        {!! Form::email('email_institucional', null, ['class' => 'form-control','id' => 'email_institucional', 'placeholder' => 'Email@setas.to.gov.br']) !!}
        <span class="glyphicon glyphicon-send form-control-feedback"></span>
      </div><!-- Email trabalho -->
    </div><!-- Col 6 -->

  </div><!-- row -->

  <div class="row">
    
    <div class="col-md-3">
      <div class="form-group has-feedback">
        {!! Form::text('cep', null, ['class'=> 'form-control', 'id'=> 'cep', 'placeholder' => '77.100-100']) !!}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- CEP -->
    </div>

    <div class="col-md-9">
      <div class="form-group has-feedback">
        {!! Form::text('endereco', null, ['class'=> 'form-control', 'id'=> 'endereco', 'placeholder' => 'Quadra 110 Norte, Alameda']) !!}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Endereço -->
    </div><!-- Col 9 -->

  </div><!-- row -->

  <div class="row">
      
    <div class="col-md-5">
      <div class="form-group has-feedback">
        {!! Form::text('complemento', null, ['class'=> 'form-control', 'id'=> 'complemento', 'placeholder' => 'Bairro da Luz']) !!}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Complemento -->
    </div><!-- Col 5 -->

    <div class="col-md-4">
      <div class="form-group has-feedback">
        {!! Form::text('id_cidade', null, ['class'=> 'form-control', 'id'=> 'id_cidade', 'placeholder' => 'Cidade']) !!}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Cidade -->
    </div><!-- Col 4 -->

    <div class="col-md-3">
      <div class="form-group has-feedback">
        {!! Form::text('id_estado', null, ['class'=> 'form-control', 'id'=> 'id_estado', 'placeholder' => 'Estado']) !!}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Estado -->
    </div><!-- Col 3 -->

  </div>

  <div class="row">
    
  <div class="col-md-4">
    <div class="form-group has-feedback">
      {!! Form::text('telefone_pessoal', null, ['class'=> 'form-control', 'id'=> 'telefone_pessoal', 'placeholder' => '(00)0000-0000']) !!}
      <span class="glyphicon glyphicon-phone form-control-feedback"></span>
    </div><!-- Telefone Pessoal -->
  </div>

  <div class="col-md-4">
    <div class="form-group has-feedback">
      {!! Form::text('telefone_institucional', null, ['class'=> 'form-control', 'id'=> 'telefone_institucional', 'placeholder' => '(00)0000-0000']) !!}
      <span class="glyphicon glyphicon-phone form-control-feedback"></span>
    </div><!-- Telefone Trabalho -->
  </div>

  <div class="col-md-4">
    <div class="form-group has-feedback">
      {!! Form::select('id_escolaridade', array('EM' => 'Ensino Médio', 'ES' => 'Ensino Superior'), ['class'=> 'form-control', 'placeholder' => '']) !!}
    </div><!-- Escolaridade -->
  </div>

  </div>

  <div class="row">

    <div class="col-md-2">

    </div><!-- Col 2 -->

    <div class="col-md-2">

    </div><!-- Col 2 -->
  
    <div class="col-md-6" >
      <div class="form-group has-feedback">
        {!! Form::text('cpf', null, ['class'=> 'form-control', 'id'=> 'cpf', 'placeholder' => 'CPF']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- CPF -->

      <div class="form-group has-feedback">
        {!! Form::text('rg', null, ['class'=> 'form-control', 'id'=> 'rg', 'placeholder' => 'Identidade']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- Identidade -->

      <div class="form-group has-feedback">
        {!! Form::text('orgao_emissor', null, ['class'=> 'form-control', 'id' => 'orgao_emissor', 'placeholder' => 'Órgão Emissor']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- Órgão Emissor -->

      <div class="form-group has-feedback">
        {!! Form::text('id_estado_rg', null, ['class'=> 'form-control', 'id' => 'id_estado_rg', 'placeholder' => 'Estado do RG']) !!}
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div><!-- Estado do RG -->


      <div class="form-group has-feedback">
        {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
        {!! Form::date('data_nascimento', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'data_nascimento', 'placeholder' => '2015-01-01 Data Nascimento']) !!}
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div><!--Data Nascimento -->
    </div><!-- Col 6 -->

  </div>
  <div class="form-group has-feedback">
    {!! Form::submit('Cadastrar!', ['class' => 'btn btn-primary']) !!}
  </div><!-- Botão -->
    {!! Form::close() !!}
</div>  

@endsection