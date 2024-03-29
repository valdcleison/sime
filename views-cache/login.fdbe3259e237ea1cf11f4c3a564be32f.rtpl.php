<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Packet Software">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Sime">
  <title>SIME - Login</title>

 
  <link href="/res/Admin/img/favicon.png" rel="icon">
  <link href="/res/Admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="/res/Admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="/res/Admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <link href="/res/Admin/css/style.css" rel="stylesheet">
  <link href="/res/Admin/css/style-responsive.css" rel="stylesheet">

</head>

<body>

  <div id="login-page">
    <div class="container">
      <form class="form-login" action="/login/" method="post">
        <h2 class="form-login-heading">Acesse o sistema</h2>
        <div class="login-wrap">
          <input type="text" name="user" class="form-control" placeholder="USUÁRIO" autofocus required>
          <br>
          <input type="password" name="pass" class="form-control" placeholder="SENHA" minlength="8" required> 
          <label class="checkbox">
            
            <span class="pull-right">
            <a data-toggle="modal" href="/login/#myModal"> Recuperar senha</a>
            </span>
          </label>
          <input class="btn btn-theme btn-block" type="submit" value="ENTRAR"/>
          <?php if( $error != '' ){ ?>

          <br>

          <div class="alert alert-danger"><b>Algo deu errado!</b> <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</div>
          <?php } ?>

          <?php if( $succes != '' ){ ?>

          <br>

          <div class="alert alert-success"><b><?php echo htmlspecialchars( $succes, ENT_COMPAT, 'UTF-8', FALSE ); ?></b></div>
          <?php } ?>

          <hr>
          
          <div class="registration">
            Não tem acesso? <br/>
            <a class="" href="/solicitacao/">
              Clique aqui para solicitar
              </a>
          </div>
        </div>
       </form>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Recuperar a senha</h4>
              </div>
              <form action="/forgot/" method="post">
              	
              <div class="modal-body">
                <p>Informe o seu email para recuperar sua senha!</p>
                <input type="text" name="emailpessoa" placeholder="Email"  class="form-control placeholder-no-fix" required>
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                <button class="btn btn-theme" type="submit">Enviar</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      
      
    </div>
  </div>
  
  <script src="/res/Admin/lib/jquery/jquery.min.js"></script>
  <script src="/res/Admin/lib/bootstrap/js/bootstrap.min.js"></script>
  
  <!--<script type="text/javascript" src="/res/Admin/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("/res/Admin/img/login-bg.jpg", {
      speed: 500
    });
  </script>-->
</body>

</html>
