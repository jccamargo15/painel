<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Trocar Senha</h1>

	<!-- form action calls file -->
	<form class="form-horizontal" name="change_password"
		id="change_password" action="?page=change_pass" method="post"
		data-toggle="validator" role="form">
		<fieldset>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="new_pass">Nova Senha</label>
				<div class="col-md-4">
					<input id="new_pass" name="new_pass" placeholder="nova senha" class="form-control input-md" type="password">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="confirm_pass">Confirmar Senha</label>
				<div class="col-md-4">
					<input id="confirm_pass" name="confirm_pass" placeholder="confirmar senha" class="form-control input-md" type="password">
				</div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="enviar"></label>
				<div class="col-md-8">
					<button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
					<button id="cancel" name="cancel" class="btn btn-danger">Limpar</button>
				</div>
			</div>

		</fieldset>
	</form>
</div>