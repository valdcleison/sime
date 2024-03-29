<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="masthead text-center text-white">
  <img src="/res/Layout/img/banner.jpg" class="banner">
  <div class="row">
    <div class="col-md-12">

      <div class="masthead-content conteudo">

        <div class="container">
          <h1 class="masthead-heading mb-0">Tenha seus alunos na palma da mão</h1>
          <br>
          <p class="masthead-subheading mb-0">O SIME é um sistema que tem como objetivo auxiliar as escolas no controle de frequência de seus alunos</p>
          <a href="#about" class="btn btn-primary btn-xl rounded-pill mt-2">Saiba Mais</a>
        </div>
      </div>
    </div>
  </div>
  
</header>

<section id="about">
 <div class="row">
  <div class="col-md-5"></div>
  <div class="col-md-2">
    <center><img src="/res/Layout/img/logo-azul.jpg" width="100" height="100"></center>
  </div>
  <div class="col-md-5"></div>
  </div>
  <br>
  <br>
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2">
      <h3>SOBRE</h3>
    </div>
    <div class="col-md-5"></div>
  </div>
  <br>
 
  <br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <p>Auxiliar no gerenciamento da frequência das escolas, fazendo com que os responsaveis fiquem mais proximos das escolas, através de um sistema onde os responsaveis recebem um alerta via SMS caso o aluno venha a faltar a aula</p>
    </div>
    <div class="col-md-2"></div>
  </div>
  <p></p>
</section>


<section class="pricing py-5" id="price">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plano Básico</h5>
            <h6 class="card-price text-center">$300,00<span class="period">/mês</span></h6>
            <hr>
            <p>Poderá ultilizar todas as funcionalidades do sistema, porém não terá o adicional da maquina e do pacote com 1000 cartões</p>
            <br><br><br>
            
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
   
      <!-- Pro Tier -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plano Pró</h5>
            <h6 class="card-price text-center">$2600,00<span class="period">/Parcela unica</span></h6>
            <h6 class="card-price text-center">$300,00<span class="period">/mês</span></h6>
            <hr>
            <p>Além de todas as funcionalidades basicas do sistema, está incluso no pacote uma maquina para gerar os imprimira cartões para os alunos, além de 1000 modelos</p>
        
          </div>
        </div>
      </div>
     
      <div class="col-lg-4"></div>
      <div class="col-lg-4"><a href="/solicitacao/ " class="btn btn-block btn-primary text-uppercase">SOLICITAR ACESSO</a></div>
      <div class="col-lg-4"></div>
  

      
    </div>
  </div>
</section>



<div class="container contact-form" id="contact">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="/contato/">
                <h3>Envie uma Mensagem</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Seu Nome *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Seu Email*" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Seu telefone*" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar Menssagem" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Sua Mensagem *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

