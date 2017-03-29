<?php
	$gallery_cod = $_GET['galeria'];
	$image_action = $_GET['image_action'];

	if( isset($_GET['image_name']) ) {
		$image_name = $_GET['image_name'];
		$image_cod  = $_GET['image_cod'];
	}
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<?php 
		if($image_action=='new') { $palavra = 'Enviar'; }
		if($image_action=='change') { $palavra = 'Alterar'; }
	?>
	<h1 class="page-header"><?php echo $palavra; ?> imagem</h1>
	
	<!-- it's just a reminder, do not really validates the file format -->
	<!-- note: implement validation later -->
	<div class="alert alert-success" role="alert">Lembre-se, a imagem enviada deve ser do tipo <strong>JPG</strong>.</div>
	<div class="alert alert-success" role="alert">O arquivo enviado não deve ser maior que <strong>2 MB</strong>.</div>

	<?php if($image_action=='new') { ?>
	<form class="form-horizontal" name="file_send" action="?page=image_insert&galeria=<?php echo  $gallery_cod; ?>" method="post" enctype="multipart/form-data">
	<?php } if($image_action=='change') { ?>
	<form class="form-horizontal" name="file_send" action="?page=image_change&galeria=<?php echo  $gallery_cod; ?>&image_name=<?php echo  $image_name; ?>&image_cod=<?php echo  $image_cod; ?>" method="post" enctype="multipart/form-data">
	<?php } ?>
		<fieldset>

			<div class="form-group">
				<label class="col-md-4 control-label" for="archive">Foto</label>
				<div class="col-md-4">
					<input id="archive" name="archive" class="input-file" type="file">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="button1id"></label>
				<div class="col-md-8">
					<button id="button1id" name="button1id" class="btn btn-success" type="submit">Enviar</button>
					<button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
				</div>
			</div>

		</fieldset>
	</form>

</div>