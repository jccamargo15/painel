<?php

// receive the path of the file
$file = "clients/".$_GET['client_folder']."/".$_GET['archive'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// if download shows the sucess message
if(unlink($file)) {
	echo '<div class="jumbotron">';
	echo '<h1>Feito! Arquivo excluído.</h1>';
	echo '<p>Arquivo: '.$_GET['archive'].'</p>';
	echo '<p><a class="btn btn-primary btn-lg" href="?page=clientes" role="button">Voltar</a></p>';
	echo '</div>';
}
else {
	echo '<div class="alert alert-danger" role="alert">Falha ao excluir arquivo.</div>';
	echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>';
}

echo '</div>';