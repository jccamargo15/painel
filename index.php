<?php include 'settings.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head
  content must come *after* these tags -->
  <!-- <meta name="description" content=""> -->
  <meta name="author" content="Art.Com Comunicação e Marketing">
  <link rel="icon" href="favicon.ico">
  <title><?php echo $nome_empresa; ?> | Área Restrita</title>
  <!-- change -->
  <!-- Bootstrap core CSS -->
  <link href="bt/css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bt/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]>
    <script src="bt/docs/assets/js/ie8-responsive-file-warning.js"></script>
  <![endif]-->
  <script src="bt/docs/assets/js/ie-emulation-modes-warning.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements
  and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .logo-empresa-painel {
      margin-bottom: 20px;
    }
    .btn-login-painel {
      background-color: <?php echo $cor_principal; ?>;
      border-color: <?php echo $cor_principal; ?>;
    }
  </style>
</head>

<body>
  <div class="container">
    <form class="form-signin" method="POST" action="signin_login.php">
      <img class="img-responsive logo-empresa-painel" src="images/logo_empresa.png" alt="Grupo Sultec">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required="">
      <button class="btn btn-lg btn-primary btn-block btn-login-painel" type="submit">Entrar</button>
    </form>
    <center>
    	<br/><br/>
    	<a href="../">Voltar à Homepage</a>
    </center>
  </div>
  <!-- /container -->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="bt/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>