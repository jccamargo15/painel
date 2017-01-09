<!DOCTYPE html>
<?php

// connection database
require_once 'settings.php';


// receive news title and text
$deposition_name = trim(addslashes($_POST['deposition_name']));
$deposition_role = trim(addslashes($_POST['deposition_role']));
$deposition_text = trim(addslashes($_POST['deposition_text']));


// database query, update deposition information
$query = "UPDATE tb_depositions SET deposition_text = '$deposition_text', deposition_name = '$deposition_name', deposition_role = '$deposition_role' WHERE deposition_cod = ".$_GET['deposition_cod'];
mysqli_query ( $conn, $query );

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
echo '<div class="jumbotron">';
echo '<h1>Sucesso! Depoimento Atualizado.</h1>';
echo '<p><a class="btn btn-primary btn-lg" href="?page=depoimentos" role="button">Voltar</a></p>';
echo '</div></div>';
?>