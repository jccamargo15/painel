<!DOCTYPE html>
<?php
/*
 * Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

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

// receive news title and text
$title = trim(addslashes($_POST['title']));
$text = htmlspecialchars ( $_POST [( string ) $key] );

// database query, insert news information
// format date before insert
$query = "INSERT INTO tb_news (news_title, news_date, news_text) VALUES ('$title', '" . date ( "Y-m-d H:i:s" ) . "', '$text')";
mysqli_query ( $conn, $query );

// shows sucess message
echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
echo '<div class="jumbotron">';
echo '<h1>Sucesso! Notícia Registrada.</h1>';
echo '<p><a class="btn btn-primary btn-lg" href="?page=noticias" role="button">Voltar</a></p>';
echo '</div></div>';
// send to another page
// echo "<script type='text/javascript'>document.location.href=\"../../index.php\"</script>";
?>
