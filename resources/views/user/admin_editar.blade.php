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
  <input type="hidden" class="form-control" name="dados_atualizados" value="1" placeholder="Email">
  <div class="row">

    <div class="col-md-7">
    <small class="text-muted">Nome Completo</small>
      <div class="form-group has-feedback" >
        <input disabled type="text" class="form-control" value="{{ $usuarios->name }}" name="name" id="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Nome Completo -->
    </div><!-- Col 7 -->

    <div class="col-md-5">
    <small class="text-muted">Nome para o crachá</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" name="nome_cracha" id="nome_cracha"value="{{ $usuarios->nome_cracha }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Nome Crachá -->
    </div><!-- Col 5 -->

  </div><!-- row -->

  <div class="row">

    <div class="col-md-4">
    <small class="text-muted">CPF</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" name="cpf" id="cpf" value="{{ $usuarios->cpf }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- CPF -->
    </div><!-- Col 4 -->

    <div class="col-md-3" >
    <small class="text-muted">Data de Nascimento</small>
      <div class="form-group has-feedback">
        <input disabled type="date" class="form-control" value="{{ $usuarios->data_nascimento }}" name="data_nascimento" id="data_nascimento" required>
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
        <input disabled type="text" class="form-control" name="rg" id="rg" value="{{ $usuarios->rg }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Identidade -->
    </div><!-- Col 4 -->
    
     <div class="col-md-3" > 
     <small class="text-muted">Órgão Emissor</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" value="{{ $usuarios->orgao_emissor }}" name="orgao_emissor" id="orgao_emissor" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div><!-- Órgão Emissor -->
    </div><!-- Col 3 -->

    <div class="col-md-3">
      <div class="form-group has-feedback">
        <small class="text-muted">UF - RG</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select disabled class="form-control" name="id_estado_rg" id="id_estado_rg" required>
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
        <select disabled class="form-control" name="sexo" id="sexo" value="{{ $usuarios->sexo }}" required>
          
          <option value="">{{$usuarios->sexo}}</option>
         <!--  @if($usuarios->sexo == "Masculino") -->
            <option value="Feminino">Feminino</option>
          <!-- @elseif($usuarios->sexo == "Feminino") -->
            <option value="Masculino">Masculino</option>
         <!--  @endif -->
           
        </select>
      </div> <!-- Sexo -->
    </div><!-- Col 3 -->

  </div><!-- row -->

  <div class="row">
    
    <div class="col-md-3">
    <small class="text-muted">CEP Residencial</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" name="cep" id="cep" value="{{ $usuarios->cep }}" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
        
      </div><!-- CEP -->
    </div><!-- Col 3 -->

    <div class="col-md-9">
    <small class="text-muted">Endereço</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" name="endereco" id="endereco" value="{{ $usuarios->endereco }}" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Endereço -->
    </div><!-- Col 9 -->

  </div><!-- row -->

  <div class="row">
      
    <div class="col-md-3">
    <small class="text-muted">Complemento</small>
      <div class="form-group has-feedback">
        <input disabled type="text" class="form-control" name="complemento" id="complemento" value="{{ $usuarios->complemento }}">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div><!-- Complemento -->
    </div><!-- Col 5 -->

    <div class="col-md-4">
      <div class="form-group has-feedback">
      <small class="text-muted">Estado</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select disabled class="form-control" name="id_estado" id="id_estado" required>
            <option value="{{$usuarios->estado->id_estado}}">{{$usuarios->estado->nome}}</option>
            @foreach ($estados as $estado)
              
                <option value="{{$estado->id_estado}}">{{$estado->nome}}</option>
              
            @endforeach
          </select>
        </div>
        
      </div><!-- Estado -->
    </div><!-- Col 3 -->

    <div class="col-md-5">
      <div class="form-group has-feedback">
      <small class="text-muted">Cidade</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select disabled class="form-control" name="id_cidade" id="id_cidade" required>
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
        <input disabled data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_pessoal" id="telefone_pessoal" value="{{ $usuarios->telefone_pessoal }}" required>
      </div><!-- Telefone Pessoal -->
    </div> <!-- Col 3-->

    <div class="col-md-5">
      <div class="form-group has-feedback">
      <small class="text-muted">Escolaridade</small>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clone"></i></span>
          <select disabled class="form-control" name="id_escolaridade" id="id_escolaridade" required>
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
          <input disabled data-inputmask='"mask": "(99) 9999-9999"' data-mask type="text" class="form-control" name="telefone_trabalho" id="telefone_trabalho" value="{{ $usuarios->telefone_trabalho }}" required>
        </div><!-- Telefone Trabalho -->
        
      </div><!-- Col 3 -->

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
      <small class="text-muted">Número de Identificação Social</small>
        <div class="form-group has-feedback">
          <input disabled type="text" class="form-control" value="{{ $usuarios->nis }}" name="nis" id="nis" required>
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
        <small class="text-muted">Função</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select disabled class="form-control" name="id_funcao" id="id_funcao" required>
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

      <div class="col-md-4">
        <div class="form-group has-feedback">
        <small class="text-muted">Vinculo</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select disabled class="form-control" name="id_vinculo_institucional" id="id_vinculo_institucional" required>
              <option value="{{$usuarios->vinculoinstitucional->id_vinculo_institucional}}">{{$usuarios->vinculoinstitucional->descricao}}</option>
              @foreach ($vinculos as $vinculo)
                  <option value="{{$vinculo->id_vinculo_institucional}}">{{$vinculo->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Vinculo Institucional -->
      </div><!-- Col 4 -->

      <div class="col-md-4" >
      <small class="text-muted">Data de Início do Serviço</small>
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          <input disabled type="date" class="form-control" name="inicio_servico" id="inicio_servico" value="{{ $usuarios->inicio_servico}}" required>
          
        </div><!--Data Início de Serviço -->
      </div><!-- Col 4 -->

      <div class="col-md-4">
        <div class="form-group has-feedback">
        <small class="text-muted">Departamento</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select disabled class="form-control" name="id_departamento" id="id_departamento" required>
              <option value="{{$usuarios->departamento->id_departamento}}">{{$usuarios->departamento->descricao}}</option>
              @foreach ($departamentos as $departamento)
                  <option value="{{$departamento->id_departamento}}">{{$departamento->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Departamento -->
      </div><!-- Col 4 -->

    </div><!-- row -->

    <div class="row">

      <div class="col-md-8">
        <div class="form-group has-feedback">
        <small class="text-muted">Órgão</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select disabled class="form-control" name="id_orgao" id="id_orgao">
             <option value="{{$usuarios->orgao->id_orgao}}">{{$usuarios->orgao->descricao}}</option>
              @foreach ($orgaos as $orgao)
                  <option value="{{$orgao->id_orgao}}">{{$orgao->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Órgão -->
      </div><!-- Col 8 -->

      <div class="col-md-4">
        <div class="form-group has-feedback">
        <small class="text-muted">Cargo</small>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clone"></i></span>
            <select disabled class="form-control" name="id_cargo" id="id_cargo" required>
              <option value="{{$usuarios->cargo->id_cargo}}">{{$usuarios->cargo->descricao}}</option>
              @foreach ($cargos as $cargo)
                  <option value="{{$cargo->id_cargo}}">{{$cargo->descricao}}</option>
              @endforeach
            </select>
          </div>
          
        </div><!-- Cargo -->
      </div><!-- Col 3 -->

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

      <div class="col-md-4">
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
      </div><!-- Col 4 -->
    
    </div><!-- row -->

  </div>
</div>
  @if($usuarios->dados_atualizados == 0)
    <input type="hidden" class="form-control" name="id_perfil" value="3" id="id_perfil">
  @endif
  <button type="submit" class="btn btn-primary btn-large">Atualizar</button>
</form><!-- Form -->
@endsection