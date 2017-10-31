@extends('layout-backend.admin_template')

@section('content')
<form action="{{ route('u.update', ['id'=>$usuarios->id]) }}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<!-- Box formulario dados pessoais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Dados Pessoais</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <!-- <i class="fa fa-minus"></i></button> -->
    </div>
  </div>

  <div class="box-body clearfix">
  <!-- <input type="hidden" class="form-control" name="dados_atualizados" value="1"> -->
      <div class="row">


        <div class="col-md-7">
        <small class="text-muted">Nome Completo</small>
          <div class="form-group has-feedback" >
            <input type="text" class="form-control" value="{{ $usuarios->name }}" name="name" id="name" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><!-- Nome Completo -->
        </div><!-- Col 7 -->

        <div class="col-md-5">
        <small class="text-muted">Nome para o crachá</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nome_cracha" id="nome_cracha"value="{{ $usuarios->nome_cracha }}" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><!-- Nome Crachá -->
        </div><!-- Col 5 -->

      </div><!-- row -->

      <div class="row">

        <div class="col-md-4">
        <small class="text-muted">CPF</small>
          <div class="form-group has-feedback">
            <input disabled type="text" class="form-control" name="cpf" id="cpf" value="{{ $usuarios->cpf }}" onkeypress="mascara(this, '###.###.###-##')" maxlength="14" placeholder="999.999.999-99" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><!-- CPF -->
        </div><!-- Col 4 -->

        <div class="col-md-3" >
        <small class="text-muted">Data de Nascimento</small>
          <div class="form-group has-feedback">
            <input type="date" class="form-control" value="{{ $usuarios->data_nascimento }}" name="data_nascimento" id="data_nascimento" required>
            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
            
          </div><!--Data Nascimento -->
        </div><!-- Col 3 -->

        <div class="col-md-5">
        <small class="text-muted">Email pessoal</small>
          <div class="form-group has-feedback">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input disabled type="email" class="form-control" name="email" id="email" value="{{ $usuarios->email }}" required>
            </div>
          </div><!-- Email pessoal -->
        </div><!-- Col 5 -->

      </div><!-- row -->

      <div class="row">

        <div class="col-md-3">
        <small class="text-muted">Identidade</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="rg" id="rg" value="{{ $usuarios->rg }}" onkeypress="mascara(this, '############-#')" maxlength="14" placeholder="999999999999-9" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><!-- Identidade -->
        </div><!-- Col 4 -->
        
         <div class="col-md-3" > 
         <small class="text-muted">Órgão Emissor</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{ $usuarios->orgao_emissor }}" name="orgao_emissor" id="orgao_emissor" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><!-- Órgão Emissor -->
        </div><!-- Col 3 -->

        <div class="col-md-3">
          <div class="form-group has-feedback">
            <small class="text-muted">UF - RG</small>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-clone"></i></span>
              <select class="form-control" name="id_estado_rg" id="id_estado_rg" required>
                <option value="{{$usuarios->estado->id_estado}}">{{$usuarios->estado->uf}}</option>            
                @foreach ($estado_rgs as $estado_rg)              
                    <option value="{{$estado_rg->id_estado}}">{{$estado_rg->uf}}</option>
                @endforeach
              </select>
            </div>
          </div><!-- Estado RG -->
        </div><!-- Col 2 -->

        <div class="col-md-3">
        <small class="text-muted">Sexo</small>
          <div class="form-group has-feedback">
            <select class="form-control" name="sexo" id="sexo" required>
              <option value="{{$usuarios->sexo}}">{{$usuarios->sexo}}</option>
              @if($usuarios->sexo == "Masculino")
                <option value="Feminino">Feminino</option>
              @else
                <option value="Masculino">Masculino</option>
              @endif
               
            </select>
          </div> <!-- Sexo -->
        </div><!-- Col 3 -->

      </div><!-- row -->

      <div class="row">
        
        <div class="col-md-3">
        <small class="text-muted">CEP Residencial</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="cep" id="cep" value="{{ $usuarios->cep }}" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
            
          </div><!-- CEP -->
        </div><!-- Col 3 -->

        <div class="col-md-9">
        <small class="text-muted">Endereço</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $usuarios->endereco }}" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div><!-- Endereço -->
        </div><!-- Col 9 -->

      </div><!-- row -->

      <div class="row">
          
        <div class="col-md-4">
        <small class="text-muted">Complemento</small>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $usuarios->complemento }}">
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div><!-- Complemento -->
        </div><!-- Col 4 -->

        <div class="col-md-4">
          <div class="form-group has-feedback">
          <small class="text-muted">Estado</small>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-clone"></i></span>
              <select class="form-control" name="id_estado" id="id_estado" required>
                <option value="{{$usuarios->estado->id_estado}}">{{$usuarios->estado->nome}}</option>
                @foreach ($estados as $estado)
                  
                    <option value="{{$estado->id_estado}}">{{$estado->nome}}</option>
                  
                @endforeach
              </select>
            </div>
            
          </div><!-- Estado -->
        </div><!-- Col 4 -->

        <div class="col-md-4">
          <div class="form-group has-feedback">
          <small class="text-muted">Cidade</small>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-clone"></i></span>
              <select class="form-control" name="id_cidade" id="id_cidade" required>
                <option value="{{$usuarios->cidade->id_cidade}}">{{$usuarios->cidade->nome}}</option>
                @foreach ($cidades as $cidade)
                  
                    <option value="{{$cidade->id_cidade}}">{{$cidade->nome}}</option>
                  
                @endforeach
              </select>
            </div>
            
          </div><!-- Cidade -->
        </div><!-- Col 4 -->

      </div><!-- row -->

      <div class="row">

        <div class="col-md-3">
        <small class="text-muted">Telefone Pessoal</small>
          <div class="form-group has-feedback input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
            </div>
              <input data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_pessoal" id="telefone_pessoal" value="{{ $usuarios->telefone_pessoal }}" required>
            </div><!-- Telefone Pessoal -->
        </div> <!-- Col 3-->

        <div class="col-md-5">
          <div class="form-group has-feedback">
          <small class="text-muted">Escolaridade</small>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-clone"></i></span>
              <select class="form-control" name="id_escolaridade" id="id_escolaridade" required>
                <option value="{{$usuarios->escolaridade->id_escolaridade}}">{{$usuarios->escolaridade->descricao}}</option>
                @foreach ($escolaridades as $escolaridade)
                  
                    <option value="{{$escolaridade->id_escolaridade}}">{{$escolaridade->descricao}}</option>
                  
                @endforeach
              </select>
            </div>
            
          </div><!-- Escolaridade -->
        </div><!-- Col 5 -->

        <div class="col-md-4">
          <small class="text-muted">Telefone do Trabalho</small>
          <div class="form-group has-feedback input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_trabalho" id="telefone_trabalho" value="{{ $usuarios->telefone_trabalho }}" required>
          </div><!-- Telefone Trabalho -->
            
        </div><!-- Col 4 -->

        <div class="col-md-4">
          <div class="form-group has-feedback">
            <small class="text-muted">Deficiência</small>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-clone"></i></span>
              <select class="form-control" name="id_deficiencia" id="id_deficiencia" required>
                <option value="{{$usuarios->deficiencia->id_deficiencia}}">{{$usuarios->deficiencia->descricao}}</option>
                @foreach ($deficiencias as $deficiencia)
                  <option value="{{$deficiencia->id_deficiencia}}">{{$deficiencia->descricao}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div><!-- Col 4 -->

        <!-- <div class="col-md-4">
          <div class="form-group">
            <input class="form-control" type="file" class="form-control-file" name="foto" id="foto" value="{{ $usuarios->foto }}">
            <small class="text-muted">Foto do Inscrito</small>
          </div>
        </div><!-- Col 4 -->

      </div><!-- row -->

  </div>
</div>
<!-- Box formulario dados institucionais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Dados Profissionais</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <!-- <i class="fa fa-minus"></i></button> -->
    </div>
  </div>

  <div class="box-body clearfix">

    <div class="row">    

      <div class="col-md-4">
      <small class="text-muted">Número de Identificação Social - NIS(PIS/PASEP)</small>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" value="{{ $usuarios->nis }}" name="nis" id="nis" onkeypress="mascara(this, '#.###.###.###-#')" maxlength="15" placeholder="9.9999.999.9999-9" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div><!-- NIS -->
      </div><!-- Col 4 -->

      <div class="col-md-4">
      <small class="text-muted">Email Institucional</small>
        <div class="form-group has-feedback">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input disabled type="email" class="form-control" value="{{ $usuarios->email_institucional }}" name="email_institucional" id="email_institucional" placeholder="e-mail@setas.to.gov.br" required>
          </div>
        </div><!-- Email trabalho -->
      </div><!-- Col 4 -->

      <div class="col-md-4">
        <div class="form-group has-feedback">
        <small class="text-muted">Cargo se Servidor Efetivo</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_cargo" id="id_cargo" required>
              <option value="{{$usuarios->cargo->id_cargo}}">{{$usuarios->cargo->descricao}}</option>
              @foreach ($cargos as $cargo)
                  <option value="{{$cargo->id_cargo}}">{{$cargo->descricao}}</option>
              @endforeach
            </select>
          </div>
        </div><!-- Cargo -->
      </div><!-- Col 3 -->
    
    </div><!-- row -->

    <div class="row">

      <div class="col-md-5">
        <div class="form-group has-feedback">
        <small class="text-muted">Vinculo</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_vinculo_institucional" id="id_vinculo_institucional" required>
              <option value="{{$usuarios->vinculoinstitucional->id_vinculo_institucional}}">{{$usuarios->vinculoinstitucional->descricao}}</option>
              @foreach ($vinculos as $vinculo)
                  <option value="{{$vinculo->id_vinculo_institucional}}">{{$vinculo->descricao}}</option>
              @endforeach
            </select>
          </div>
        </div><!-- Vinculo Institucional -->
      </div><!-- Col 5 -->

      <div class="col-md-3" >
      <small class="text-muted">Data de Início do Serviço</small>
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          <input type="date" class="form-control" name="inicio_servico" id="inicio_servico" value="{{ $usuarios->inicio_servico}}" required>
          
        </div><!--Data Início de Serviço -->
      </div><!-- Col 3 -->

      <div class="col-md-4">
        <div class="form-group has-feedback">
        <small class="text-muted">Função se Comissionado</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_funcao" id="id_funcao" required>
              <option value="{{$usuarios->funcao->id_funcao}}">{{$usuarios->funcao->descricao}}</option>
              @foreach ($funcoes as $funcao)
                  <option value="{{$funcao->id_funcao}}">{{$funcao->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Função -->
      </div><!-- Col 4 -->

    </div><!-- row -->

    <div class="row">

      <div class="col-md-12">
        <div class="form-group has-feedback">
        <small class="text-muted">Órgão em que está lotado</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_orgao" id="id_orgao">
             <option value="{{$usuarios->orgao->id_orgao}}">{{$usuarios->orgao->descricao}}</option>
              @foreach ($orgaos as $orgao)
                  <option value="{{$orgao->id_orgao}}">{{$orgao->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Órgão -->
      </div><!-- Col 12 -->

    </div><!-- Row -->
    <div class="row">

      <div class="col-md-12">
        <div class="form-group has-feedback">
        <small class="text-muted">Departamento</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_departamento" id="id_departamento" required>
              <option value="{{$usuarios->departamento->id_departamento}}">{{$usuarios->departamento->descricao}}</option>
              @foreach ($departamentos as $departamento)
                  <option value="{{$departamento->id_departamento}}">{{$departamento->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Departamento -->
      </div><!-- Col 12 -->

    </div><!-- row -->

  </div>
</div>

<!-- Box formulario dados institucionais -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Segurança de acesso a usuário</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <!-- <i class="fa fa-minus"></i></button> -->
    </div>
  </div>

  <div class="box-body clearfix">

    <div class="row">    

      <div class="col-md-8">
        <div class="form-group has-feedback">
        <small class="text-muted">Perfil do Usuário</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select class="form-control" name="id_perfil" id="id_perfil" value="{{$usuarios->vinculoinstitucional->descricao}}" required>
                <option value="{{$usuarios->perfil->id_perfil}}">{{$usuarios->perfil->descricao}}</option>
                @foreach ($perfis as $perfil)
                  
                    <option value="{{$perfil->id_perfil}}">{{$perfil->descricao}}</option>
                 
                @endforeach
              
            </select>
          </div>
        </div><!-- Função -->
      </div><!-- Col 8 -->

      <div class="col-md-4">
      <small class="text-muted">Atualizado em</small>
      <div class="form-group has-feedback">
        {{ $usuarios->updated_at }}
      </div><!-- data alteração -->
    </div><!-- Col 4 -->
    
    </div><!-- row -->

  </div>
</div>
  @if($usuarios->dados_atualizados == 0)
    <input type="hidden" class="form-control" name="id_perfil" value="3" id="id_perfil">
  @endif
  <button type="submit" class="btn btn-primary btn-large">Atualizar Usuário</button>

</form><!-- Form -->

@endsection



@section('post-script')
  <script type="text/javascript">
    $('select[name=id_estado]').change(function () {
        var idEstado = $(this).val();

        //$('select[name=id_cidade]').html('').append('<option value="">  Carregando...  </option>');
        $.get('/get-cidades/' + idEstado, function (cidades) {
            $('select[name=id_cidade]').empty();
            $.each(cidades, function (key, value) {
                $('select[name=id_cidade]').append('<option value=' + value.id_cidade + '>' + value.nome + '</option>');
            });
        });
    });
</script>

<script type="text/javascript">
    $('select[name=id_orgao]').change(function () {
        var idOrgao = $(this).val();

        $.get('/get-departamentos/' + idOrgao, function (departamento) {
            $('select[name=id_departamento]').empty();
            $.each(departamento, function (key, value) {
                $('select[name=id_departamento]').append('<option value=' + value.id_departamento + '>' + value.descricao + '</option>');
            });
        });
    });
</script>

@endsection()