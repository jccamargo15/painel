<?php
// verify login session
if ( !isset( $_COOKIE ["admin_logged"] ) && !isset( $_COOKIE ["user_logged"] ) ) {
	echo '<div class="alert alert-danger" role="alert">Área Restrita! Faça login para acessar esta página.</div>';
	echo '<a href="index.html" class="btn btn-primary">Voltar</a>';
} else {
	// path of download files folder
	$path = "downloads/";
	$folder = dir($path);
	$count = 0;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Documentos para Download</h1>

<?php 
// if administrador is logged shows add file button
if ( isset( $_COOKIE ["admin_logged"]) ) {
	echo '<a href="?page=download_send" type="button" class="btn btn-success">Adicionar documento</a>';
}
?>


<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<tr>
			<th>Documento</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
	<?php
		// list the files of client/user folder - begin
		while($arquivo = $folder -> read()){
			if($count>=2) {
				echo '<tr>';
				echo '<td><a href="'.$path.$arquivo.'">'.$arquivo.'</a></td>';
				echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$count.'">Excluir</button></td>';
				echo '</tr>';
				echo '<div id="myModal'.$count.'" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title"><span class="label label-warning">Atenção</span></h2>
						</div>
					<div class="modal-body">
					<p>Tem CERTEZA que deseja excluir o arquivo: '.$arquivo.'?</p>
					<p>Esta ação não pode se desfeita!.</p>
				</div>';
				echo '	<div class="modal-footer">
					<a href="?page=delete_download&archive='.$arquivo.'" type="button" class="btn btn-danger">Excluir</a>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			  	</div>
			  </div>
  			</div>
		</div>';
			}
			$count++;
		}
		$folder -> close();
		// list the files of client/user folder - end
	?>
	</tbody>
</table>

</div>
</div>
<?php } ?>