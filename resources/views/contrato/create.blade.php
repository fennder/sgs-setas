<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Contratos e Convênios - SETAS</title>
</head>
<body>
    <h1>Cria Contratos e Convênios</h1>
    <a class="btn btn-primary" href="/contrato"><i class="glyphicon glyphicon-pencil">Listagem</i></a>
    <div class="container">

        <form action="/contrato/store" method="POST">

            <!--{!! Form::label('numero_cc','Número:') !!}
            {!! Form::text('numero_cc', null, ['class'=>'form-control']) !!}<br />

            {!! Form::label('data_inicio_cc','Data Início:') !!}
            {!! Form::text('data_inicio_cc', null, ['class'=>'form-control']) !!}<br />

            {!! Form::label('data_fim_cc','Data Fim:') !!}
            {!! Form::text('data_fim_cc', null, ['class'=>'form-control']) !!}<br />

            {!! Form::label('valor_cc','Valor:') !!}
            {!! Form::text('valor_cc', null, ['class'=>'form-control']) !!}<br />

            {!! Form::label('obs_cc','Observação:') !!}
            {!! Form::textarea('obs_cc', null, ['class'=>'form-control']) !!}<br />

            {!! Form::selectYear('year', 2015, 2016, 2017, ['class' => 'field'])!!}
            {!! Form::selectMonth('month') !!}
            
            {!! Form::checkbox('agree') !!}
            {!! Form::checkbox('agree'), 'Portador de deficiência' !!}
            {!! Form::selectMonth('month') !!}
            {!! Form::selectYear('year', 2013, 2015, 2014, ['class' => 'field']) !!}
            {!! Form::select('idade', ['menor de 18', '19 a 30', 'Maior que 30']) !!}

            -->

            Numero: <input type="text" name="numero_cc"><br />
            Data de Início: <input type="date" name="data_inicio_cc"><br />
            Data do Fim: <input type="date" name="data_fim_cc"><br />
            Valor: <input type="text" name="valor_cc" placeholder="Valor em R$"><br />
            Observação: <textarea name="obs_cc"></textarea><br /-->
            <input type="submit" value="Salvar"><br />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            
        </form>

    </div>
</body>
</html>