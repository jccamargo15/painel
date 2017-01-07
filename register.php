<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Cadastrar Cliente</h1>

<!-- form action calls register_insert.php file -->
<form class="form-horizontal" name="clients_register"
	id="clients_register" action="?page=register_insert" method="post"
	enctype="multipart/form-data" data-toggle="validator" role="form">
	<fieldset>

		<div class="form-group">
			<label class="col-md-4 control-label" for="client_name">Nome do Cliente</label>
			<div class="col-md-4">
				<input id="client_name" name="client_name" placeholder="nome" class="form-control input-md" required="" type="text">
				<span class="help-block">Nome da empresa ou dono</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="client_email">E-mail</label>
			<div class="col-md-4">
				<input id="client_email" name="client_email" placeholder="e-mail" class="form-control input-md" required="" type="email">
				<span class="help-block">E-mail de contato do cliente cadastrado</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="confirm_email">Confirme o e-mail</label>
			<div class="col-md-4">
				<input id="confirm_email" name="confirm_email"
					placeholder="confirme o e-mail" class="form-control input-md"
					required="" type="text"
					data-validation-matches-match="client_email"
					data-validation-matches-message="Must match email address entered above">
				<span class="help-block">Repita o e-mail</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="btn_send">Cadastrar</label>
			<div class="col-md-8">
				<button id="btn_send" name="btn_send" class="btn btn-success" type="submit">Cadastrar</button>
				<button id="btn_clear" name="btn_clear" class="btn btn-danger">Limpar</button>
			</div>
		</div>

	</fieldset>
</form>
</div>