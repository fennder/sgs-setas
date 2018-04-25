@extends('layout-backend.admin_template')

@section('content')

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        @if($usuarios->sexo == "Masculino")
          <img class="profile-user-img img-responsive img-circle" src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" alt="User profile picture">
        @elseif($usuarios->sexo == "Feminino")
          <img class="profile-user-img img-responsive img-circle" src="{{ asset("/bower_components/AdminLTE/dist/img/user2-1-160x160.jpg") }}" alt="User profile picture">
        @endif

        <h3 class="profile-username text-center">{{ $usuarios->nome_cracha}}</h3>

        <p class="text-muted text-center">{{ $usuarios->perfil->descricao}}</b></br>

        {{ $usuarios->email}}</p>

        <!-- <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Followers</b> <a class="pull-right">1,322</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="pull-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="pull-right">13,287</a>
          </li>
        </ul> -->

       <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <div class="box box-primary">

      <div class="box-header with-border">

        <h3 class="box-title">Sobre mim</h3>

      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <strong><i class="fa fa-book margin-r-5"></i> Formação </strong>

        <p class="text-muted">

          {{ $usuarios->escolaridade->descricao }}

        </p>

        <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Trabalho </strong>

        <p>

          {{ $usuarios->orgao->descricao }},</br>
          {{ $usuarios->departamento->descricao }},</br>
          {{ $usuarios->vinculoinstitucional->descricao }},</br>       
          {{ $usuarios->cargo->descricao }},</br>
          {{ $usuarios->funcao->descricao }}
          
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Localização </strong>

        <p class="text-muted">

          {{ $usuarios->estado->nome }},</br>
          {{ $usuarios->cidade->nome }}
          
        </p>

        <!-- <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

        <p>
          <span class="label label-danger">UI Design</span>
          <span class="label label-success">Coding</span>
          <span class="label label-info">Javascript</span>
          <span class="label label-warning">PHP</span>
          <span class="label label-primary">Node.js</span>
        </p>

        <hr>

        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong> -->

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->

    
      <!-- <div class="col-md-9">
          
        <div class="box-body">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert! {{ $salvo or Null }}</h4>
                 Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                  soul, like these sweet mornings of spring which I enjoy with my whole heart.
          </div>
          
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Dados salvos com sucesso! </h4>
          </div>
        </div>
        
      </div>  -->         
    
    <div class="col-md-9">
      <div class="nav-tabs-custom">

        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Dados Pessoais</a></li>
          <li><a href="#timeline" data-toggle="tab">Dados Profissionais</a></li>
          <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
        </ul>

        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <!-- Post -->
            <form action="{{ route('u.update', ['id'=>$usuarios->id]) }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">

              <div class="row">
                
                <div class="col-md-8">
                <small class="text-muted">Nome Completo</small>
                  <div class="form-group has-feedback" >
                    <input type="text" class="form-control" value="{{ $usuarios->name }}" name="name" id="name" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div><!-- Nome Completo -->
                </div><!-- Col 7 -->

                <div class="col-md-4">
                <small class="text-muted">Nome para o crachá</small>
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nome_cracha" id="nome_cracha"value="{{ $usuarios->nome_cracha }}"  maxlength="20" placeholder="Ex.: Paulo Silva" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div><!-- Nome Crachá -->
                </div><!-- Col 5 -->

              </div><!-- row -->

              <div class="row">

                <div class="col-md-4">
                <small class="text-muted">CPF</small>
                  <div class="form-group has-feedback">
              
                    <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $usuarios->cpf }}" onkeypress="mascara(this, '###.###.###-##')" maxlength="14" placeholder="999.999.999-99" required>
                    
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div><!-- CPF -->
                </div><!-- Col 4 -->

                <div class="col-md-3">
                  <small class="text-muted">Identidade</small>
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control" name="rg" id="rg" value="{{ $usuarios->rg }}" required>
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div><!-- Identidade -->
                  </div><!-- Col 4 -->
                  
                   <div class="col-md-2" > 
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
                        
                          @if($usuarios->estado_rg)
                            <option value="{{$usuarios->estado_rg->id_estado}}">{{$usuarios->estado_rg->uf}}</option>
                          @else
                            <option value="">- Selecione -</option>
                          @endif
                          @foreach ($estado_rgs as $estado_rg)              
                              <option value="{{$estado_rg->id_estado}}">{{$estado_rg->uf}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- Estado RG -->
                  </div><!-- Col 2 -->

              </div><!-- row -->

              <div class="row">

                <div class="col-md-4" >
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
                      <input type="email" class="form-control" name="email" id="email" value="{{ $usuarios->email }}" required>
                    </div>
                  </div><!-- Email pessoal -->
                </div><!-- Col 5 -->

                <div class="col-md-3">
                  <small class="text-muted">Sexo</small>
                    <div class="form-group has-feedback">
                      <select class="form-control" name="sexo" id="sexo" required>
                          @if($usuarios->sexo)
                            <option value="{{$usuarios->sexo}}">{{$usuarios->sexo}}</option>
                          @else
                            <option value="">- Selecione -</option>
                          @endif
                          <option value="Feminino">Feminino</option>
                          <option value="Masculino">Masculino</option>
                         
                      </select>
                    </div> <!-- Sexo -->
                  </div><!-- Col 3 -->

              </div><!-- row -->

              <div class="row">
    
                <div class="col-md-3">
                <small class="text-muted">CEP Residencial</small>
                  <div class="form-group has-feedback">
                    <input type="text" onkeypress="mascara(this, '##.###-###')" maxlength="10" class="form-control" name="cep" id="cep" value="{{ $usuarios->cep }}" required>
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
      
              <div class="col-md-3">
              <small class="text-muted">Complemento</small>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $usuarios->complemento }}">
                  <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div><!-- Complemento -->
              </div><!-- Col 5 -->

              <div class="col-md-4">
                <div class="form-group has-feedback">
                <small class="text-muted">Estado</small>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                    <select class="form-control" name="id_estado" id="id_estado" required>
                      @if($usuarios->estado)
                        <option value="{{$usuarios->estado->id_estado}}">{{$usuarios->estado->nome}}</option>
                      @else
                        <option value="">- Selecione -</option>
                      @endif
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
                    <select class="form-control" name="id_cidade" id="id_cidade" required>
                        @if($usuarios->cidade)
                          <option value="{{$usuarios->cidade->id_cidade}}">{{$usuarios->cidade->nome}}</option>
                        @else
                          <option value="">- Selecione -</option>
                        @endif

                        @foreach ($cidades as $cidade)
                            <option value="{{$cidade->id_cidade}}">{{$cidade->nome}}</option>
                        @endforeach
                    </select>
                  </div>
                </div><!-- Cidade -->
              </div><!-- Col 5 -->

            </div><!-- row -->

            <div class="row">

              <div class="col-md-5">
              <small class="text-muted">Telefone Pessoal</small>
                <div class="form-group has-feedback input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input  type="text" name="telefone_pessoal" id="telefone_pessoal" value="{{ $usuarios->telefone_pessoal }}" onkeypress="mascara(this, '## #####-####')" maxlength="13" class="form-control" placeholder="99 99999-9999"required>
                </div><!-- Telefone Pessoal -->
              </div> <!-- Col 3-->

              <div class="col-md-7">
                <div class="form-group has-feedback">
                <small class="text-muted">Escolaridade</small>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                    <select class="form-control" name="id_escolaridade" id="id_escolaridade" required>
                      @if($usuarios->escolaridade)
                        <option value="{{$usuarios->escolaridade->id_escolaridade}}">{{$usuarios->escolaridade->descricao}}</option>
                      @else
                        <option value="">- Selecione -</option>
                      @endif
                      @foreach($escolaridades as $escolaridade) 
                        <option value="{{$escolaridade->id_escolaridade}}">{{$escolaridade->descricao}}</option> 
                      @endforeach
                    </select>
                  </div>
                  
                </div><!-- Escolaridade -->
              </div><!-- Col 5 -->

            </div><!-- row -->

            <div class="row">

              <div class="col-md-5">
                <div class="form-group has-feedback">
                <small class="text-muted">Deficiência</small>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                    <select class="form-control" name="id_deficiencia" id="id_deficiencia" required>
                      <option value="{{$usuarios->deficiencia->id_deficiencia}}">{{$usuarios->deficiencia->descricao}}</option>
                      @foreach($deficiencias as $deficiencia) 
                        <option value="{{$deficiencia->id_deficiencia}}">{{$deficiencia->descricao}}</option> 
                      @endforeach
                      
                    </select>
                  </div>
                  
                </div><!-- Deficiencia -->
              </div><!-- Col 5 -->

            </div><!-- row -->

              <button type="submit" class="btn btn-primary btn-large">ATUALIZAR MEUS DADOS PESSOAIS</button>
            </form><!-- Form -->
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
            <!-- /.post -->

          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="timeline">

            <!-- Post -->
            <form action="{{ route('u.update', ['id'=>$usuarios->id]) }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="row">

                  <div class="col-md-4">
                    <small class="text-muted">Número de Identificação Social - NIS</small>
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control" value="{{ $usuarios->nis }}" name="nis" id="nis" onkeypress="mascara(this, '#.###.###.###-#')" maxlength="15" placeholder="9.9999.999.9999-9" required>
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <small class="text-muted">Telefone do Trabalho</small>
                    <div class="form-group has-feedback input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input onkeypress="mascara(this, '## ####-####')" type="text" class="form-control" name="telefone_trabalho" id="telefone_trabalho" value="{{ $usuarios->telefone_trabalho }}" placeholder="99 99999-9999" maxlength="12" required>
                    </div><!-- Telefone Trabalho -->
                  </div><!-- Col 3 -->

                  <div class="col-md-4" >
                    <small class="text-muted">Data de Início do Serviço</small>
                    <div class="form-group has-feedback">
                      <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                      <input type="date" class="form-control" name="inicio_servico" id="inicio_servico" value="{{ $usuarios->inicio_servico}}" required>
                    </div><!--Data Início de Serviço -->
                  </div><!-- Col 3 -->


                </div><!-- row -->

                <div class="row">

                  <div class="col-md-6">
                    <small class="text-muted">Email Institucional</small>
                    <div class="form-group has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" value="{{ $usuarios->email_institucional }}" name="email_institucional" id="email_institucional" placeholder="e-mail@setas.to.gov.br" required>
                      </div>
                    </div><!-- Email trabalho -->
                  </div><!-- Col 6 -->

                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                    <small class="text-muted">Vinculo</small>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                        <select class="form-control" name="id_vinculo_institucional" id="id_vinculo_institucional" required>
                          @if($usuarios->vinculoinstitucional)
                            <option value="{{$usuarios->vinculoinstitucional->id_vinculo_institucional}}">{{$usuarios->vinculoinstitucional->descricao}}</option>
                          @else
                          <option value="">- Selecione -</option>
                          @endif
                          @foreach ($vinculos as $vinculo)
                              <option value="{{$vinculo->id_vinculo_institucional}}">{{$vinculo->descricao}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- Vinculo Institucional -->
                  </div><!-- Col 5 -->

                </div><!-- row -->

                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                    <small class="text-muted">Cargo se Servidor Efetivo</small>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                        <select class="form-control" name="id_cargo" id="id_cargo" required>
                          @if($usuarios->cargo)
                            <option value="{{$usuarios->cargo->id_cargo}}">{{$usuarios->cargo->descricao}}</option>
                          @else
                          <option value="">- Selecione -</option>
                          @endif
                          @foreach ($cargos as $cargo)
                              <option value="{{$cargo->id_cargo}}">{{$cargo->descricao}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- Cargo -->
                  </div><!-- Col 4 -->

                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                    <small class="text-muted">Função se Comissionado</small>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                        <select class="form-control" name="id_funcao" id="id_funcao" required>
                          @if($usuarios->funcao)
                            <option value="{{$usuarios->funcao->id_funcao}}">{{$usuarios->funcao->descricao}}</option>
                          @else
                          <option value="">- Selecione -</option>
                          @endif
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
                        <select class="form-control" name="id_orgao" id="id_orgao" required>
                          @if($usuarios->orgao)
                            <option value="{{$usuarios->orgao->id_orgao}}">{{$usuarios->orgao->descricao}}</option>
                          @else
                          <option value="">- Selecione -</option>
                          @endif
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
                          @if($usuarios->departamento)
                            <option value="{{$usuarios->departamento->id_departamento}}">{{$usuarios->departamento->descricao}}</option>
                          @else
                          <option value="">- Selecione -</option>
                          @endif
                          @foreach ($departamentos as $departamento)
                              <option value="{{$departamento->id_departamento}}">{{$departamento->descricao}}</option>
                          @endforeach
                        </select>
                      </div>
                      
                    </div><!-- Departamento -->
                  </div><!-- Col 12 -->

                </div><!-- row -->

              <button type="submit" class="btn btn-primary btn-large">ATUALIZAR MEUS DADOS PROFISSIONAIS</button>
            </form><!-- Form -->
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
            <!-- /.post --> 

          </div>
          <!-- /.tab-pane -->

          <div class="tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
@endsection