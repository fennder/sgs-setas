@extends('layout-backend.admin_template')

@section('content')
	
		<h1><p>Bem vindo!!!</p></h1>
		<h3><p>Sr(a), <b>{{ $users->name or "Servidor"}}</b>,
		você está na <b>{{$lotacao or "SETAS"}}</b>.</p>
		</h3>
 	<!--div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">Panel content
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">Panel content
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">Panel content
            </div>
        </div>
    </div>
</div-->
@endsection