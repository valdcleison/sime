<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="main-content">
      <section class="wrapper">
        
        <div class="row mt">
          <div class="col-sm-12">
            <div class="content-panel">
              <div class="container">

                <form action="/admin/escola/create/" method="POST"> 

                   <div class="row form-group" id="content">
                      
                              
                      <div class="col-md-10">
                        <?php if( $error != '' ){ ?>

                        <br>

                        <div class="alert alert-danger"><b>Algo deu errado!</b> <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</div>
                        <?php } ?>

                        <?php if( $success != '' ){ ?>

                        <br>

                        <div class="alert alert-success"><b><?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?></b></div>
                        <?php } ?>

                      </div>

                      
                      <div class="col-md-6 form-group">
                        <h3>DADOS DA ESCOLA</h3>
                        <hr>
                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Nome da Instituição</b></span>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="text" name="nomeescola" id="nomeescola" class="form-control" required>  
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>CNPJ da Instituição</b> </span> (Apenas numeros) 
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input-group mb-3">

                              <input type="text" name="cnpjescola" id="cnpj" class="form-control" placeholder="00.000.000/0000-00" aria-describedby="button-addon2" minlength="14" maxlength="14" required>
                              

                            </div>
                            
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Nome do Gestor</b></span>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="text" name="nomegestor" class="form-control" required>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Email do Gestor</b></span>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="email" name="emailgestor" class="form-control" required>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>CPF do Gestor</b></span>  (Apenas numeros) 
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="text" name="cpfgestor" class="form-control" minlength="11" maxlength="11" required>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Plano</b></span>
                          </div>
                        </div>

                        <div class="row">
                          
                          <div class="col-md-12">
                            <select class="form-control" name="planos">
                              <option value="1">Plano Basico - R$39,90 Mensal ou R$459,90 Anual</option>
                              <option value="2">Plano Médio - R$69,90 Mensal ou R$799,90 Anual</option>
                              <option value="3">Plano Avançado - R$99,90 Mensal ou R$1099,90 Anual</option>
                            </select>
                          </div>
                          
                        </div>
                        <br>
                        <hr>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Nome de Usuario</b></span>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="text" name="usuarioescola" class="form-control" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Senha</b></span>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="password" name="senhaescola" class="form-control" required>
                          </div>
                        </div>
                        
                      </div>
                  
                      <div class="col-md-5">
                        <h3>ENDEREÇO E CONTATO</h3>
                        <hr>
                        
                        <div class="row">
                          
                          <div class="col-md-6">
                            <span><b>Logradouro</b></span>
                            <input type="text" name="logradouro" id="log" class="form-control" required>
                          </div>
                          <div class="col-md-3">
                            <span><b>Bairro</b></span>
                            <input type="text" name="bairro" id="bairro" class="form-control" required>
                          </div>
                          <div class="col-md-3">
                            <span><b>Numero</b></span>  
                            <input type="number" name="numero" id="numero" class="form-control" required>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          
                          <div class="col-md-6">
                             <span><b>Cidade</b></span>
                            <input type="text" name="cidade" id="cidade" class="form-control" readonly required>
                          </div>
                          <div class="col-md-3">
                            <span><b>Estado</b></span>
                            <input type="text" name="estado" id="estado" class="form-control" minlength="8" maxlength="8" readonly required>
                          </div>
                          <div class="col-md-3">
                            <span><b>CEP</b></span>
                            <input type="text" name="cep" id="cep" class="form-control" minlength="8" maxlength="8" required>
                          </div>
                        </div>
                        <hr>
                        

                        <div class="row">
                          <div class="col-md-12">
                            <span><b>Email</b></span>
                          </div>
                        </div>
                        

                        <div class="row">
                          
                          <div class="col-md-12">
                            <input type="email" name="emailescola" id="emailescola" class="form-control" required>
                          </div>
                          
                        </div>
                        <br>
                        
                        

                        
                    
                        <div class="row">
                          
                          <div class="col-md-6">
                            <span><b>Telefone</b></span>  (Apenas numeros) 
                            <input type="text" name="telefone" id="telefone" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <span><b>Celular</b></span>  (Apenas numeros) 
                            <input type="text" name="celular" id="celular" class="form-control" required>
                          </div>
                        </div>


                      </div>

                          <br>

                          <div class="col-md-12">
                            
                          <input type="submit" class="btn btn-primary" id="btnEscola" value="Salvar"></input>
                          </div>
                          <br>
                          <br>
                          <br>

                  </div>
                </form>
              </div>
              
              
              
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>