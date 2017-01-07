<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Histórico de Download de Arquivos</h1>
<?php
	// database query, select downloads and order by date
	$query = "SELECT tb_clients.client_name, tb_downloads.download_file, tb_downloads.download_date
				FROM tb_clients, tb_downloads, tb_folders
				WHERE tb_clients.client_cod = tb_downloads.tb_folders_tb_clients_client_cod
				AND tb_folders.folder_cod = tb_downloads.tb_folders_folder_cod
				ORDER BY download_date";
	$query = mysqli_query ( $conn, $query );
?>

<div class="table-responsive">
			
<table class="table table-striped">
	<thead>
		<tr>
			<th>Arquivo</th>
			<th>Cliente</th>
			<th>Data download</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	// list history - begin
	
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		//echo '<td>' . var_dump(mysqli_fetch_assoc($query)) . '</td>';
		echo '<td>' . $row['download_file'] . '</td>';
		echo '<td>' . $row['client_name'] . '</td>';
		echo '<td>' . $row['download_date'] . '</td>';
		echo '</tr>';
	}
	// list history - end
	?>
	</tbody>
</table>


</div>

</div>