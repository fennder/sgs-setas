@extends('layout-backend.admin_template')

@section('content')
	
		<h1><p>Bem vindo!!!</p></h1>
		<h3><p>Sr(a), <b>{{ $users->name or "Servidor"}}</b>,
		você está na <b>{{$lotacao or "SETAS"}}</b>.</p>
		</h3>
 
@endsection