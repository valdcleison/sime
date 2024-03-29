<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SIME - Administração</title>

  <link href="img/favicon.png" rel="icon">


  <link href="/res/Admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="/res/Admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <link href="/res/Admin/css/style.css" rel="stylesheet">
  <link href="/res/Admin/css/style-responsive.css" rel="stylesheet">
  <link href="/res/Admin/css/table-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  
  <script src="/res/Admin/lib/chart-master/Chart.js"></script>
  <link href="css/style.css" rel="stylesheet">
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  

<body>
  <section id="container">
    
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

     

      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/logout/">SAIR</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <?php if( $avatar == null ){ ?>

            <p class="centered"><img src="/res/Admin/img/user-avatar/user.jpg" class="img-circle" width="100" height="100"></p> 
          <?php }else{ ?>

            <p class="centered"><img src="/res/Admin/img/user-avatar/<?php echo htmlspecialchars( $avatar, ENT_COMPAT, 'UTF-8', FALSE ); ?>.jpg" class="img-circle" width="100" height="100"></p> 
            
          <?php } ?>

          
          <h5 class="centered"><?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
          <li class="mt">
            <a href="/portal/profile/">
              <i class="fa fa-user"></i>
              <span>Perfil Escolar</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-group"></i>
              <span>Usuários</span>
              </a>
            <ul class="sub">
              <li><a href="/portal/users/create/">Cadastrar</a></li>
              <li><a href="/portal/users/">Listar</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-group"></i>
              <span>Alunos</span>
              </a>
            <ul class="sub">
              <li><a href="/portal/alunos/create/">Cadastrar</a></li>
              <li><a href="/portal/alunos/">Listar</a></li>
            </ul>
          </li>
          <li >
            <a href="/portal/frequencia">
              <i class="fa fa-book  "></i>
              <span>Frequência</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Relatorio</span>
              </a>
            <ul class="sub">
              <li><a href="/portal/relatorios/"><i class="fa fa-angle-right"></i>Diário</a></li>
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>