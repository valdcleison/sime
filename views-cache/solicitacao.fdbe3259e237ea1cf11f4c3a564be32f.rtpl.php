<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<title>
		
	Solicitação
	</title>
	<link href="/res/Admin/Dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/res/Admin/Dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/res/Admin/Dashio/lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="/res/Admin/Dashio/lib/bootstrap-daterangepicker/daterangepicker.css" />
</head>
<body>

<form action="/solicitacao/" method="post" class="form-panel">
	Nome da Escola: <input type="text" name="nomeEscola" class="form-control">
	CNPJ: <input type="text" name="CNPJ" class="form-control">
	<input type="submit" name="ENVIAR" class="btn btn-theme">

</form>


</body>
</html>