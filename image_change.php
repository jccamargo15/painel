<?php

// receive file data
$archive_name = $_FILES["archive"]["name"];
$archive_path = $_FILES["archive"]["tmp_name"];

$gallery_cod = $_GET['galeria'];
$image_name  = $_GET['image_name'];
$image_cod   = $_GET['image_cod'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// path of the parent folder of file
$folder = 'galleries/'.$gallery_cod."/";


// rename, treat, ganerate the thumb, move and record the file - begin
if( move_uploaded_file($archive_path, $folder.$archive_name) ) {
	//$old_name = $folder.$archive_name;
	$new_name = $folder.$image_name;
	
	//calls de image tratment file
	include 'image_treatment.php';
	
	$img = $new_name; // image name that would be saved/resized
	$ImgHandler = new ImgHandler();			// function of 'image_treatment.php'
	$foto = $ImgHandler->saveImg( $folder.$archive_name );	// function of 'image_treatment.php'
	//$ImgHandler->createThumb( $foto );	// function of 'image_treatment.php'
	
	unlink($folder.$archive_name);
	unlink($folder.$image_name);

	// echo $new_name;
	// echo '<br>';
	// echo $folder.$archive_name;

	rename($folder.'foto.jpg', $new_name) or die("Erro ao renomear foto.");

	//insert the picture name on the database
	//$query = "INSERT INTO tb_images (image_gallery, image_name) VALUES ($gallery_cod, '$image_name')";
	$query = "UPDATE tb_images SET image_name = '$image_name' WHERE tb_images.image_cod = $image_cod";
	mysqli_query ( $conn, $query );
	
	// show jumbotron with sucess message
	echo '<div class="jumbotron">';
	echo '<h1>Sucesso! Foto alterada.</h1>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=galeria" role="button">Voltar</a></p>';
	echo '</div>';
}
else {
	// if failed, show error message
	echo '<div class="alert alert-danger" role="alert">Falha ao enviar arquivo.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}
// rename, treat, ganerate the thumb, move and record the file - end

echo '</div>';

?>