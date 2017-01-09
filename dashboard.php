<?php 
	session_start();
	require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content=""> <!-- change if published online -->
<meta name="author" content="Art.com Propaganda">
<link rel="icon" href="../favicon.ico"> <!-- change -->

<title>Painel Sultec</title> <!-- change -->

<!-- Bootstrap core CSS -->
<link href="bt/docs/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="bt/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="bt/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="bt/docs/assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<!-- editor js -->
<script src="ckeditor/ckeditor.js"></script>    

</head>

<body>
<?php
if ( !isset( $_COOKIE ["admin_logged"] ) && !isset( $_COOKIE ["user_logged"] ) ) {
	echo '<div class="alert alert-danger" role="alert">Área Restrita! Faça login para acessar esta página.</div>';
	echo '<a href="index.html" class="btn btn-primary">Voltar</a>';
} else {
?>

<nav class="navbar navbar-inverse navbar-fixed-top visible-xs hidden-sm hidden-md hidden-lg">
	<!-- IMPORTANT: nav bar top visible only on mobile -->
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- brand nav bar menu mobile -->
			<!--  <a class="navbar-brand" href="#" style="color: #ffffff;">Angular Painel</a> -->
			<img class="img-responsive" src="negative_logo.png" alt="Angular Painel" style="height: 30px; margin: 10px;">
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		<!-- show menu options according logged user -->
		<?php if ( isset( $_COOKIE ["admin_logged"] ) ) { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?page=clientes" style="color: #ffffff;">Clientes</a></li>
				<li><a href="?page=noticias" style="color: #ffffff;">Notícias</a></li>
				<li><a href="?page=datas" style="color: #ffffff;">Datas</a></li>
				<li><a href="logoff.php" style="color: #ffffff;">Sair</a></li>
			</ul>
		<?php }
			  if ( isset( $_COOKIE ["user_logged"] ) ) { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?page=documentos" style="color: #ffffff;">Documentos</a></li>
				<li><a href="logoff.php" style="color: #ffffff;">Sair</a></li>
			</ul>
		<?php } ?>
		<!-- search field -->
<!-- 			<form class="navbar-form navbar-right"> -->
<!-- 				<input type="text" class="form-control" placeholder="Search..."> -->
<!-- 			</form> -->
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">	
	<?php
	// verify which kind of user is logged and show the correspondent menu and inner page
	if ( isset( $_COOKIE ["admin_logged"] ) ) {
		require_once 'menu_adm.php';

		if ( !empty($_GET["page"]) ) {
			require_once strtolower($_GET["page"]) . '.php';
		}
		else {
			require_once 'clientes.php';
		}
	}
	
	if ( isset( $_COOKIE ["user_logged"] ) ) {
		require_once 'menu_usr.php';
		
		if ( !empty($_GET["page"]) ) {
			require_once strtolower($_GET["page"]) . '.php';
		}
		else {
			require_once 'folder.php';
		}		
	?>				
	</div>
</div>
<?php } ?>

<!-- Bootstrap core JavaScript  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="bt/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="bt/docs/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="bt/docs/assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bt/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
<?php } ?>
