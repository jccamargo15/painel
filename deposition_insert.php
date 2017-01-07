<?php 
require_once 'myfunctions.php';
require_once 'connection.php';

// receive client information
$deposition_name = $_POST['deposition_name'];
$deposition_role = $_POST['deposition_role'];
$deposition_text = $_POST['deposition_text'];
$deposition_type = $_POST['media_type'];

if($_POST['media_type'] == 'image') {
	// receive file data
	$image_name = $_FILES["deposition_image"]["name"];
	$image_path = $_FILES["deposition_image"]["tmp_name"];
	
	// path of the folder of depositions images
	$folder = 'depositions/';
	
	// rename, treat, ganerate the thumb, move and record the file - begin
	move_uploaded_file($image_path, $folder.$image_name);
	$old_name = $folder.$image_name;
	$image_name = $folder.default_password_generator($deposition_name).default_password_generator($deposition_role).'.jpg';
	rename($old_name, $image_name);

	//calls de image tratment file
	include 'cover_treatment.php';

	$img = $image_name; // image name that would be saved/resized
	$ImgHandler = new ImgHandler();			// function of 'cover_treatment.php'
	$foto = $ImgHandler->saveImg( $img );	// function of 'cover_treatment.php'
	$ImgHandler->createThumb( $foto );		// function of 'cover_treatment.php'
	
	
	// rename picture and miniature and move them to the created folder
// 	$big_name = "news_" . $_GET['news_cod'] . ".jpg";
// 	$small_name = "news_" . $_GET['news_cod'] . "_mini.jpg";
// 	rename("news/foto.jpg", "news/" . $big_name) or die("Erro ao renomear foto.");
// 	rename("news/foto_thumb.jpg", "news/" . $small_name) or die("Erro ao renomear miniatura.");

	unlink($image_name);
	unlink("depositions/foto_thumb.jpg");
	rename("depositions/foto.jpg", $image_name);
	
	$deposition_media = $image_name;
}
if($_POST['media_type'] == 'video') {
	$deposition_media = $_POST['deposition_video'];
	// replace width video of 560 for 100%
	$deposition_media = str_replace("560", "100%", $deposition_media);
	// replace width video of 560 for 530
	/*$deposition_media = str_replace("560", "530", $deposition_media);*/
    /* embed youtube video tag */
	//<iframe width="560" height="315" src="https://www.youtube.com/embed/wwwwwwwwwww" frameborder="0" allowfullscreen></iframe>
	//<iframe width="560" height="315" src="https://www.youtube.com/embed/wwwwwwwwwww" frameborder="0" allowfullscreen></iframe>
}

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// database query, insert deposition information
$query = "INSERT INTO tb_depositions (deposition_name, deposition_role, deposition_text, deposition_media, deposition_type)
		  VALUES ('$deposition_name', '$deposition_role', '$deposition_text', '$deposition_media', '$deposition_type')";
mysqli_query($conn, $query);


echo '<div class="jumbotron">';
echo '<h1>Depoimento Registrado.</h1>';
echo '<p><a class="btn btn-primary btn-lg" href="?page=depoimentos" role="button">Voltar</a></p>';
echo '</div>';

echo '</div>';
?>
