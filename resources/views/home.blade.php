@extends('layout-backend.admin_template')

@section('content')
	
	<h3>
		<p>Bem vindo(a), Sr(a), <b>{{ $usuarios->name or "Servidor"}}</b>,
	</h3>
	<h4>
        Você está na <b>{{$lotacao or "SETAS"}}</b>.</p>
	</h4>

@endsection