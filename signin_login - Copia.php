<?php
session_start();
require_once 'myfunctions.php';
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Grupo Sultec | Área Restrita</title> <!-- change -->

<!-- Bootstrap -->
<link href="bt/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<?php

/* receive the information of user and pass */
$email = $_POST ['inputEmail'];
$pass = $_POST ['inputPassword'];

/* applies hash md5 on password */
$pass = md5 ( $pass );

//query from database
$query = mysqli_query( $conn, "SELECT * FROM tb_clients WHERE client_email='" . $email . "'" );
$checkuser = mysqli_num_rows ( $query );


//check if username exist on database
if ($checkuser != 1) {	
// if (!$result->num_rows) {	
	//settings if user doesn't exist
	echo '<div class="alert alert-danger" role="alert">Usuário não cadastrado.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}
else {
	//fetching password in database where username coincides
	while ( $row = mysqli_fetch_array ( $query ) ) {
		$checkpass = $row['client_pass'];
			
		//check if entered password meets the username password
		if ($pass == $checkpass) {
			//if all okay set session
			if($row['client_type']=='admin') {
				setcookie ( "admin_logged", $email, time () + 7200 );
			}
			if($row['client_type']=='user') {
				setcookie ( "user_logged", $email, time () + 7200 );
			}
			//sets section data
			$_SESSION['client_cod'] = $row['client_cod'];
			$_SESSION['client_name'] = $row['client_name'];
			$_SESSION['client_email'] = $row['client_email'];
			$_SESSION['client_type'] = $row['type'];
			header ( "Location: dashboard.php");
			exit ();
		} else {
			//settings if password is wrong
			echo '<div class="alert alert-danger" role="alert">Senha Incorreta!</div>';
			echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
		}
	}
}

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bt/js/bootstrap.min.js"></script>

</body>
</html>