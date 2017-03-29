<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
// sql to delete a record from received client code
$sql = "DELETE FROM tb_images WHERE image_cod = ".$_GET['image_cod'];

if (mysqli_query($conn, $sql)) {
	unlink("galleries/".$_GET['gallery_cod']."/".$_GET['image_name']);
	echo '<div class="alert alert-success"><strong>Successo!</strong> Imagem deletada.</div>';
} else {
// 	echo "Error deleting record: " . mysqli_error($conn);
	echo '<div class="alert alert-danger"><strong>Falha!</strong> Não foi possível excluir registro. '.mysqli_error($conn).'</div>';
}
?>
</div>