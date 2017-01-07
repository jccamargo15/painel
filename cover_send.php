<?php ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Enviar arquivo</h1>
	
	<!-- it's just a reminder, do not really validates the file format -->
	<!-- note: implement validation later -->
	<div class="alert alert-success" role="alert">Lembre-se, a imagem enviada deve ser do tipo <strong>JPG</strong>.</div>

	<!-- form action calls the cover_insert.php file and send the news code too  -->
	<form class="form-horizontal" name="file_send" action="?page=cover_insert&news_cod=<?php echo $_GET['news_cod']; ?>" method="post" enctype="multipart/form-data">
		<fieldset>

			<div class="form-group">
				<label class="col-md-4 control-label" for="archive">Capa da Notícia</label>
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