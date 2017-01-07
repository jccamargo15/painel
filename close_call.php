<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
// sql to delete a record from received client code
$sql = "UPDATE tb_calls SET call_status = 'closed' WHERE call_cod = " . $_GET['call_cod'];

if (mysqli_query($conn, $sql)) {
// 	echo "Record deleted successfully";
	echo '<div class="alert alert-success"><strong>Successo!</strong> Chamado encerrado.</div>';
} else {
// 	echo "Error deleting record: " . mysqli_error($conn);
	echo '<div class="alert alert-danger"><strong>Falha!</strong> Não foi possível encerrar chamado. '.mysqli_error($conn).'</div>';
}
?>
</div>