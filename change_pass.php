<?php
include 'settings.php';

$pass = trim(addslashes($_POST['new_pass']));
$confpass = trim(addslashes($_POST['confirm_pass']));

// check if both passwords are equals
if ($pass != $confpass) {
//settings if password is wrong
	echo '<div class="alert alert-danger" role="alert">Senhas não conferem!</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
	exit;
}

// apply md5 hash
$pass = md5($pass);

// database query, update password
$query = "UPDATE tb_clients SET client_pass = '$pass' WHERE client_cod = " . $_SESSION['client_cod'];


echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
if(mysqli_query($conn, $query)) {
	echo '<div class="jumbotron">';
	echo '<h1>Sucesso!</h1>';
	echo '<p>Senha Alterada.</p>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=" role="button">Voltar</a></p>';
	echo '</div>';
}
else {
	echo '<div class="alert alert-danger" role="alert">Problema ao alterar senha. Tente novamente.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}
echo '</div>';