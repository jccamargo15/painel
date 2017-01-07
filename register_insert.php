<?php 
require_once 'myfunctions.php';
require_once 'connection.php';

// receive client information
$client_name = $_POST['client_name'];
$client_email = $_POST['client_email'];
$confirm_email = $_POST['confirm_email'];


echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

/* if emails don't match, ask to inform again */
if($client_email != $confirm_email) {
	echo '<div class="alert alert-danger" role="alert">E-mails informados não coincidem! Por favor informe novamente.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}
else {
	/* verifies if the register doesn't exist by e-mail, if not does the record */
	$query = "SELECT * FROM tb_clients WHERE client_email = '" . $client_email . "'";
	$result = mysqli_query($conn, $query);
	if($result->num_rows) {
		echo '<div class="alert alert-danger" role="alert">Usuário já cadastrado com este e-mail. Por favor, informe outro.</div>';
		echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
	}
	else {
		$client_pass = default_password_generator($client_name);
 		$client_pass = md5($client_pass);
		
		$client_folder = create_client_folder($client_name);
		
		// database query, insert new client/user
		$query = "INSERT INTO tb_clients (client_name, client_email, client_pass) VALUES ('$client_name', '$client_email', '$client_pass')";
		mysqli_query($conn, $query);
		
		// client folder register - BEGIN
		// query that returns the client code
		$query = mysqli_query($conn, "SELECT client_cod FROM tb_clients WHERE client_name = '$client_name' AND client_email = '$client_email'");
		$client_cod = mysqli_fetch_array($query);
		$codigo_cliente = $client_cod[0];
		

		// insert the register on folders table
		$query = "INSERT INTO tb_folders (tb_clients_client_cod, folder_name) VALUES ('$codigo_cliente', '$client_folder')";
		mysqli_query($conn, $query);
		// client folder register - END
		
		echo '<div class="jumbotron">';
		echo '<h1>Sucesso! Cliente Registrado.</h1>';
		echo '<p>Nome: '.$client_name.'</p>';
		echo '<p>E-mail: '.$client_email.'</p>';
		echo '<p>Senha: '.default_password_generator($client_name).'</p>';
		echo '<p><a class="btn btn-primary btn-lg" href="?page=clientes" role="button">Voltar</a></p>';
		echo '</div>';
	}
}
echo '</div>';
?>
