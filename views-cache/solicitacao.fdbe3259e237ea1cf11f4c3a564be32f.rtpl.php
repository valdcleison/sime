<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="container">
  <form action="/solicitacao/" method="POST"> 
    <div class="row form-group" id="content">
       
        <div class="col-lg-6 form-group">
          <h3>DADOS DA ESCOLA</h3>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <span><b>Nome da Instituição</b></span>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12">
              <input type="text" name="nomeescola" id="nomeescola" class="form-control">
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
              <span><b>CNPJ da Instituição</b></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group mb-3">

                <input type="text" name="cnpjescola" id="cnpj" class="form-control" placeholder="   .   .  /    -  " aria-describedby="button-addon2" minlength="14" maxlength="14">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="seachCNPJ"><i class="fa fa-search"></i></button>
                </div>

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
              <input type="text" name="nomegestor" class="form-control">
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
              <span><b>CPF do Gestor</b></span>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12">
              <input type="text" name="cpfgestor" class="form-control">
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-md-12">
              <span><b>Nome de Usuario</b></span>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12">
              <input type="text" name="usuarioescola" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <span><b>Senha</b></span>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12">
              <input type="password" name="senhaescola" class="form-control">
            </div>
          </div>
          
        </div>
    
        <div class="col-lg-6">
          <h3>ENDEREÇO E CONTATO</h3>
          <hr>
          
          <div class="row">
            
            <div class="col-md-6">
              <span><b>Logradouro</b></span>
              <input type="text" name="logradouro" id="log" class="form-control">
            </div>
            <div class="col-md-3">
              <span><b>Bairro</b></span>
              <input type="text" name="bairro" id="bairro" class="form-control">
            </div>
            <div class="col-md-3">
              <span><b>Numero</b></span>
              <input type="text" name="numero" id="numero" class="form-control">
            </div>
          </div>
          <br>

          <div class="row">
            
            <div class="col-md-6">
               <span><b>Cidade</b></span>
              <input type="text" name="cidade" id="cidade" class="form-control" readonly>
            </div>
            <div class="col-md-3">
              <span><b>Estado</b></span>
              <input type="text" name="estado" id="estado" class="form-control" minlength="8" maxlength="8" readonly>
            </div>
            <div class="col-md-3">
              <span><b>CEP</b></span>
              <input type="text" name="cep" id="cep" class="form-control" minlength="8" maxlength="8">
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
              <span><b>Telefone</b></span>
              <input type="text" name="telefone" id="telefone" class="form-control">
            </div>
            <div class="col-md-6">
              <span><b>Celular</b></span>
              <input type="text" name="celular" id="celular" class="form-control" required>
            </div>
          </div>


        </div>
          <br>
          <br>
          <br>
            <div class="col-md-12">
              
            <input type="submit" class="btn btn-primary" value="Enviar Solicitação"></input>
            </div>
            <br>
            <br>
            <br>

    </div>
  </form>
</div>


