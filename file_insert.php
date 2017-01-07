<?php

// receive file data
$archive_name = $_FILES["archive"]["name"];
$archive_path = $_FILES["archive"]["tmp_name"];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// path of the parent folder of file
$folder = 'clients/'.$_GET['client_folder'].'/';

// database query, insert file name on table
//$query = "INSERT INTO tb_files (td_folders_tb_clients_client_cod, td_folders_folder_cod, file_name) VALUES ('$client', '$folder', '$file')";
//mysqli_query($conn, $query);

// rename, move and record the file - begin
if( move_uploaded_file($archive_path, $folder.$archive_name) ) {
	$old_name = $folder.$archive_name;
	$new_name = $folder.replace_spaces_to_underline(remove_accents($archive_name));
	rename($old_name, $new_name);
	echo '<div class="jumbotron">';
	echo '<h1>Sucesso! Arquivo enviado.</h1>';
	echo '<p>Arquivo: '.replace_spaces_to_underline(remove_accents($archive_name)).'</p>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=clientes" role="button">Voltar</a></p>';
	echo '</div>';
}
else {
	echo '<div class="alert alert-danger" role="alert">Falha ao enviar arquivo.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}
// rename, move and record the file - end

echo '</div>';

?>