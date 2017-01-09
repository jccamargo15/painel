<!DOCTYPE html>
<?php
/*
 * Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

include 'settings.php';

// get and treat editor information - begin
if (! empty ( $_POST )) {
	foreach ( $_POST as $key => $value ) {
		if ((! is_string ( $value ) && ! is_numeric ( $value )) || ! is_string ( $key ))
			continue;
		
		if (get_magic_quotes_gpc ())
			$value = htmlspecialchars ( stripslashes ( ( string ) $value ) );
		else
			$value = htmlspecialchars ( ( string ) $value );
		
	}
}
// get and treat editor information - end

// receive call subject and first answer
//$title = trim(addslashes($_POST['title']));
$text = htmlspecialchars ( $_POST [( string ) $key] );
$client_cod = $_SESSION['client_cod'];
$call_cod = $_GET['call_cod'];

// database query, insert call information
// insert call table
// $query = "INSERT INTO tb_calls (tb_clients_client_cod, call_subject, call_date) VALUES ('$client_cod', '$title', '" . date ( "Y-m-d H:i:s" ) . "')";
// mysqli_query ( $conn, $query );

// database query, call inserted information  SELECT * FROM tb_calls WHERE tb_clients_client_cod = '$client_cod' ORDER BY call_date DESC LIMIT 1
//$query = mysqli_query ( $conn, "SELECT * FROM tb_calls WHERE tb_clients_client_cod = '$client_cod' ORDER BY call_date DESC LIMIT 1" );
//$call = mysqli_fetch_assoc($query);
//$call_cod = $call['call_cod'];


// insert answer of call
$query = "SET FOREIGN_KEY_CHECKS=0;
			INSERT INTO tb_answers (tb_calls_tb_clients_client_cod, tb_calls_call_cod, answer_date, answer_text) 
			VALUES ('$client_cod', '$call_cod', '" . date ( "Y-m-d H:i:s" ) . "', '$text');
			SET FOREIGN_KEY_CHECKS=1;";

//$query = "SET FOREIGN_KEY_CHECKS=0;INSERT INTO tb_answers (tb_calls_tb_clients_client_cod, tb_calls_call_cod, answer_date, answer_text) VALUES ('3', '6', '2016-08-01 15:42:08', '<p>Resposta chamado.</p> ');SET FOREIGN_KEY_CHECKS=1;";

mysqli_query ( $conn, $query );

// if( mysqli_query ( $conn, $query ) ) {
	// shows sucess message
	echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
	echo '<div class="jumbotron">';
	echo '<h1>Resposta enviada!</h1>';
	echo '<p>Aguarde nosso contato.</p>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=chamados" role="button">Voltar</a></p>';
	echo '</div></div>';
	// send to another page	
// }
// else {
	//print ( mysql_error() );
// }

// echo "<script type='text/javascript'>document.location.href=\"../../index.php\"</script>";
?>
