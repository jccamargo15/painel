<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!-- if new date show 'cadastrar' title, if update show 'atualizar' -->
<h1 class="page-header"><?php if(isset($_GET['date_cod'])) { echo 'Atualizar'; } else { echo 'Cadastrar'; } ?> Data</h1>

<?php
	// verify if is a update
	// if date code was sent, query the date on base
	if (isset($_GET['date_cod'])) {
		$query = mysqli_query ( $conn, "SELECT * FROM tb_dates WHERE date_cod = ".$_GET['date_cod'] );
		$row = mysqli_fetch_assoc($query);
	}
?>

<!-- if update, the form action calls the date update file, else calls the insert date file -->
<?php if(isset($_GET['date_cod'])) { ?>
<form class="form-horizontal" name="clients_register"
	id="date_register" action="?page=date_update&date_cod=<?php echo $_GET['date_cod']; ?>" method="post"
	enctype="multipart/form-data" data-toggle="validator" role="form">
<fieldset>
<?php } else { ?>
<form class="form-horizontal" name="clients_register"
	id="date_register" action="?page=date_insert" method="post"
	enctype="multipart/form-data" data-toggle="validator" role="form">
<fieldset>
<?php } ?>
	<div class="form-group">
		<div class="col-md-4">
			<!-- if update fills with the date name -->
			<input id="date_name" name="date_name" placeholder="Nome da Data" class="form-control input-md" required="" type="text" <?php if (isset($_GET['date_cod'])) { echo 'value="'.$row['date_name'].'"'; } ?>>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-4">
			<!-- if update fills with the date -->
			<input id="date_date" name="date_date" class="form-control input-md" type="date" <?php if (isset($_GET['date_cod'])) { echo 'value="'.$row['date_date'].'"'; } ?>>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-8">
			<button id="btn_send" name="btn_send" class="btn btn-success" type="submit">Enviar</button>
		</div>
	</div>

</fieldset>
</form>
</div>