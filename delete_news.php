<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
// sql to delete a record from received news code
$sql = "DELETE FROM tb_news WHERE news_cod = '".$_GET['news_cod']."'";

if (mysqli_query($conn, $sql)) {
	echo '<div class="alert alert-success"><strong>Successo!</strong> Notícia deletada.</div>';
} else {
	echo '<div class="alert alert-danger"><strong>Falha!</strong> Não foi possível excluir registro. '.mysqli_error($conn).'</div>';
}
?>
</div>