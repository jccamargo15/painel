<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Depoimentos</h1>

	<script>
		function media_photo() {
			$("#media_photo").css({"visibility": "visible"});
			$("#media_video").css({"visibility": "hidden"});
		}
		
		function media_video() {
			$("#media_photo").css({"visibility": "hidden"});
			$("#media_video").css({"visibility": "visible"});
		}
	</script>
	
	<?php
	// if receive news code do the query to select news information
	if (isset($_GET['deposition_cod'])) {
		$query = mysqli_query ( $conn, "SELECT * FROM tb_depositions WHERE deposition_cod = ".$_GET['deposition_cod'] );
		$row = mysqli_fetch_assoc($query);
	}
	?>

	<?php	if (isset($_GET['deposition_cod'])) { ?>
	<form class="form-horizontal" name="deposition_register" id="deposition_register" 
	action="?page=deposition_update&deposition_cod=<?php echo $row['deposition_cod']; ?>" method="post"
	enctype="multipart/form-data" data-toggle="validator" role="form">
<?php } else { ?>
	<form class="form-horizontal" name="deposition_register" id="deposition_register" action="?page=deposition_insert" method="post"
	enctype="multipart/form-data" data-toggle="validator" role="form">
<?php } ?>

		<fieldset>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="deposition_name">Nome</label>
				<div class="col-md-4">
					<input id="deposition_name" name="deposition_name" placeholder="nome" class="form-control input-md" type="text" value="<?php if (isset($_GET['deposition_cod'])) { echo $row['deposition_name']; } ?>">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="deposition_role">Cargo/Função/Empresa</label>
				<div class="col-md-4">
					<input id="deposition_role" name="deposition_role" placeholder="cargo/função/empresa" class="form-control input-md" type="text" value="<?php if (isset($_GET['deposition_cod'])) { echo $row['deposition_role']; } ?>">
				</div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="deposition_text">Depoimento</label>
				<div class="col-md-4">
					<textarea class="form-control" id="deposition_text" name="deposition_text"><?php if (isset($_GET['deposition_cod'])) echo $row['deposition_text']; ?></textarea>
				</div>
			</div>
			<?php	if (!isset($_GET['deposition_cod'])) { ?>
			<!-- Multiple Radios (inline) -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="media_type">Mídia</label>
				<div class="col-md-4">
					<label class="radio-inline" for="media_type-0">
					<input name="media_type" id="media_type-0" value="image" onchange="media_photo();" checked="checked" type="radio"> Imagem
					</label>
					<label class="radio-inline" for="media_type-1">
					<input name="media_type" id="media_type-1" value="video" onchange="media_video();" type="radio"> Vídeo
					</label>
				</div>
			</div>

			<!-- File Button -->
			<div class="form-group" id="media_photo">
				<label class="col-md-4 control-label" for="deposition_image">Foto</label>
				<div class="col-md-4">
					<input id="deposition_image" name="deposition_image" class="input-file" type="file">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group" id="media_video" style="visibility: hidden;">
				<label class="col-md-4 control-label" for="deposition_video">Vídeo</label>
				<div class="col-md-4">
					<input id="deposition_video" name="deposition_video" placeholder="YouTube Link" class="form-control input-md" type="text">
					<span class="help-block">Insira a URL do vídeo no YouTube</span>
				</div>
			</div>
			<?php } ?>
			<!-- Button (Double) -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="enviar">
				<?php	if (isset($_GET['deposition_cod'])) { ?>
				Atualizar
				<?php } else { ?>
				Cadastrar
				<?php } ?>
				</label>
				<div class="col-md-8">
					<button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
					<button id="cancel" name="cancel" class="btn btn-danger">Limpar</button>
				</div>
			</div>

		</fieldset>
	</form>
</div>