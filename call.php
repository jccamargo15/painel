<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header"><?php if (isset($_GET['call_cod'])) { echo "Responder"; } else { echo "Novo"; } ?> Chamado</h1>

<?php
	// if receive call code do the query to select call information
	if (isset($_GET['call_cod'])) {
		$query = "SELECT * FROM tb_calls WHERE call_cod = ".$_GET['call_cod'];
		echo $query;
		$query = mysqli_query ( $conn, $query );
		$row = mysqli_fetch_assoc($query);
	}
?>

<!-- if is a edition, form action calls update file, else calls the poste file -->
<?php	//if (isset($_GET['call_cod'])) { ?>
	<form action="?page=postedcall<?php if (isset($_GET['call_cod'])) { echo '&call_cod='.$row['call_cod']; } ?>" method="post">
	<!-- <form action="?page=postedcall&call_cod=<?php //echo $row['call_cod'] ?>" method="post">  -->
<?php //} else { ?>
<!-- 	<form action="?page=postedcall" method="post"> -->
<?php //} ?>
	<!-- if is a edition, shows call title -->
	<?php if ( isset($_GET['call_cod']) ) {
		echo '<h2>'.$row['call_subject'].'</h2>';
	} 
	else { ?>
	<input id="title" name="title" placeholder="assunto" class="form-control input-md" required="" type="text" <?php if (isset($_GET['call_cod'])) { echo 'value="'.$row['call_subject'].'"'; } ?>>
	<?php } ?>
	<br />
	<!-- textarea ckeditor -->
	<!-- if is a edition, fills the box with news content -->
	<textarea name="editor1" id="editor1" rows="10" cols="80">
	</textarea>
	<script>
		// CKEditor script
		CKEDITOR.replace( 'editor1' );
	</script>
	<br />
	<?php	if (isset($_GET['call_cod'])) { ?>
	<button type="submit" class="btn btn-success">Enviar Resposta</button>
	<?php } else { ?>
	<button type="submit" class="btn btn-success">Enviar Chamado</button>
	<?php } ?>
</form>

</div>