<?php ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Enviar arquivo</h1>

	<!-- form action calls de file insert script and send the path of client folder -->
	<form class="form-horizontal" name="file_send" action="?page=file_insert&client_folder=<?php echo $_GET['client_folder']; ?>" method="post" enctype="multipart/form-data">
		<fieldset>

			<div class="form-group">
				<label class="col-md-4 control-label" for="archive">Documento</label>
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