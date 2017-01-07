<?php
include 'connection.php';

$folder = $_GET['tb_folders_folder_cod'];
$client = $_GET['tb_folders_tb_clients_client_cod'];
$file = $_GET['download_file'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// database query, insert file name on table
$query = "INSERT INTO tb_downloads (tb_folders_tb_clients_client_cod, tb_folders_folder_cod, download_file, download_date) VALUES ($client, $folder, '$file', '" . date ( "Y-m-d H:i:s" ) . "')";

if( mysqli_query($conn, $query) ) {
	echo '<div class="jumbotron">';
	echo '<h1>Download.</h1>';
	echo '<p>O Arquivo: '.$archive.'</p>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=clientes" role="button">Voltar</a></p>';
	echo '</div>';
}
else {
	echo '<div class="alert alert-danger" role="alert">Falha ao registrar download do arquivo.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}

echo '</div>';

?>