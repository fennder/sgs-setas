@extends('layout-backend.admin_template')

@section('content')
	
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page_title or "Entrada" }}
        <small>{{ $page_description or "Sistema de Gerenciamento de Inscrições" }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

	<h1>Página de entrada do sistema</h1>
	<p>Bem vindo! </p><p><b>{{$nome}}</b>, você está lotado na: <b>{{$lotacao}}</b>.</p>
@endsection