<?php
// verify login session
if ( !isset( $_COOKIE ["admin_logged"] ) && !isset( $_COOKIE ["user_logged"] ) ) {
	echo '<div class="alert alert-danger" role="alert">Área Restrita! Faça login para acessar esta página.</div>';
	echo '<a href="index.html" class="btn btn-primary">Voltar</a>';
} else {
	
	// if admin logged receive the client code by get
	if ( isset( $_COOKIE ["admin_logged"]) ) {
		$client_cod = $_GET['cliente'];
	}
	// if user logged receive client session code
	if ( isset( $_COOKIE ["user_logged"]) ) {
		$client_cod = $_SESSION['client_cod'];
	}

	// database query, select client/user information
	$query = mysqli_query ( $conn, "SELECT * FROM tb_clients WHERE client_cod='".$client_cod."'" );
	$client_query = mysqli_fetch_assoc($query);
	
	// database query, folder information
	$query = mysqli_query($conn, "SELECT * FROM tb_folders WHERE tb_clients_client_cod='".$client_cod."'");
	$folder_query = mysqli_fetch_assoc($query);
	
	// path of client folder
	$path = "clients/".$folder_query['folder_name']."/";
	$folder = dir($path);
	$count = 0;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Documentos: <?php echo $client_query['client_name']; ?></h1>

<?php 
// if administrador is logged shows add file button
if ( isset( $_COOKIE ["admin_logged"]) ) {
	echo '<a href="?page=file_send&client_folder='.$folder_query['folder_name'].'" type="button" class="btn btn-success">Adicionar documento</a>';
}

// if client/user is logged shows reminders dates 
//// if ( isset( $_COOKIE ["user_logged"]) ) {
//// 	require_once 'date_reminder.php';
//// }
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
		// prints folder files in each line - begin
		while($arquivo = $folder -> read()){
			if($count>=2) {
				echo '<tr><td>';
				// if admin logged just show the download link
				if ( isset( $_COOKIE ["admin_logged"]) ) {
					echo '<a href="'.$path.$arquivo.'">'.$arquivo.'</a>';
				}
				// if user is logged register download file info
				if ( isset( $_COOKIE ["user_logged"]) ) {
					//echo '<td><a href="'.$path.$arquivo.'">'.$arquivo.'</a></td>';
					echo '<a href="?
						page=history_insert&
						tb_folders_folder_cod='.$folder_query['folder_cod'].'&
						tb_folders_tb_clients_client_cod='.$_SESSION['client_cod'].'&
						download_file='.$arquivo.'&
						path='.$path.$arquivo.'">'.$arquivo.'</a>';
					//tb_files_tb_folders_folder_cod = $folder_query['folder_cod']
					//tb_files_tb_folders_tb_clients_client_cod = $_SESSION['client_cod']
					//download_date = data
					//download_file = $arquivo

				}
				echo '</td>';
				
				echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$count.'">Excluir</button></td>';
				echo '</tr>';
				// delete modal - begin
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
					<a href="?page=delete_file&client_folder='.$folder_query['folder_name'].'&archive='.$arquivo.'" type="button" class="btn btn-danger">Excluir</a>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			  	</div>
			  </div>
  			</div>
		</div>';
			}
			$count++;
		}
		// delete modal - end
		$folder -> close();
		// prints folder files in each line - end
	?>
	</tbody>
</table>


</div>
</div>
<?php } ?>