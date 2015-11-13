@extends('layout-backend.admin_template')

@section('content')

	<h1><p>Bem vindo!</h1> <h3></p><p><b>{{$nome or "Usuário"}}</b>, você está lotado na <b>{{$lotacao or "SETAS"}}</b>.</p></h3>

@endsection