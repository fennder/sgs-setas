<!DOCTYPE html>
<html>
<head>
	<title>Contratos e Convênios - SETAS</title>
</head>
<body>
    <h1>Lista de todos os Contratos e Convênios</h1>
    <a class="btn btn-danger" href="/contrato/create"><i class="glyphicon glyphicon-remove-sign">Ciar registro</i></a>
    <table class="table table-bordered table-striped table-hover table-condensed">
                    
        <p></p>
        <thead>
            <tr>
                <th>ID</th>
                <th>NÚMERO</th>
                <th>DATA INÍCIO</th>
                <th>DATA FIM</th>
                <th>VALOR</th>
                <th>OBSERVAÇÃO</th> 
                <th>CRIADO EM</th>
                <th>ALTERADO EM</th>                  
                <th>AÇÃO</th>
            </tr>
        </thead>
        <tbody>                      
            @if($contratos)
                <div class="container">
                    @foreach ($contratos as $contrato)
                        <tr>
                            <td>{{ $contrato->id_cc }}</td>
                            <td>{{ $contrato->numero_cc }}</td>
                            <td>{{ $contrato->data_inicio_cc }}</td>
                            <td>{{ $contrato->data_fim_cc }}</td>
                            <td>{{ 'R$ '.$contrato->valor_cc }}</td>
                            <td>{{ $contrato->obs_cc }}</td>
                            <td>{{ $contrato->created_at }}</td>
                            <td>{{ $contrato->updated_at }}</td>
                            <td>
                                <a class="btn btn-primary" href="/contrato/edit/{id}"><i class="glyphicon glyphicon-pencil">Editar</i></a>
                                <a class="btn btn-danger" href="/contrato/delete/{id}"><i class="glyphicon glyphicon-remove-sign">Deletar</i></a>
                            </td>
                        </tr>                              
                    @endforeach
                    <!-- {!! $contratos->render() !!} -->
                </div>
            @else
                <p>Nenhum registro encontrado!</p>
            @endif

        </tbody>
                    
    </table>
</body>
</html>