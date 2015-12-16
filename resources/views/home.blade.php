@extends('layout-backend.admin_template')

@section('content')
	
	<h3>
		<p>Bem vindo(a), Sr(a), <b>{{ $users->name or "Servidor"}}</b>,
	</h3>
	<h4>
        Você está na <b>{{$lotacao or "SETAS"}}</b>.</p>
	</h4>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />

    <div class="row">
  		<div class="col-md-4" ><a href="mailto:ti@setas.to.gov.br" target="_blank">Envia Email</a></div>
  		<div class="col-md-4"><a href="{{asset("/bower_components/AdminLTE/index2.html")}}">Help</a></div>
  		<div class="col-md-4"></div>
	</div>

@endsection