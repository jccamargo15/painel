<?php

// receive gallery data
$gallery_name = $_POST['gallery_name'];
$gallery_text = $_POST['gallery_text'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
    
    //insert the picture name on the database
	//$query = "UPDATE tb_banners SET banner_link = '$link' WHERE banner_name = '$banner_name'";
	$query = "INSERT INTO tb_galleries (gallery_name, gallery_text) VALUES ('$gallery_name', '$gallery_text')";
    //echo $query;
	mysqli_query ( $conn, $query );
	
	// show jumbotron with sucess message
	echo '<div class="jumbotron">';
	echo '<h1>Sucesso! Galeria cadastrada.</h1>';
	//echo '<p>Arquivo: '.replace_spaces_to_underline(remove_accents($archive_name)).'</p>';
	//echo '<p><a class="btn btn-primary btn-lg" href="?page=noticias" role="button">Voltar</a></p>';
	echo '</div>';

echo '</div>';

?>