<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Datas</h1>
<?php
	// database query, select all dates ordered by time
	$query = mysqli_query ( $conn, "SELECT * FROM tb_dates ORDER BY date_date DESC" );
?>

<a href="?page=date" type="button" class="btn btn-success">Nova Data</a>

<div class="table-responsive">
	
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data</th>
			<th>Atualizar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	// prints the registers in each line - begin
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td><a href="?page=news&news_cod='.$row['date_cod'].'">' . $row['date_name'] . '</a></td>';
		echo '<td>' . date("d/m/Y", strtotime($row['date_date'])) . '</td>';
		echo '<td><a href="?page=date&date_cod='.$row['date_cod'].'" class="btn btn-primary btn-xs">Alterar</a></td>';
		echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$row['date_cod'].'">Excluir</button></td>';
		echo '</tr>';
		// delete modal - begin
		echo '<div id="myModal'.$row['date_cod'].'" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title"><span class="label label-warning">Atenção</span></h2>
						</div>
					<div class="modal-body">
					<p>Tem CERTEZA que deseja excluir esta data?</p>
					<p>Esta ação não pode se desfeita!.</p>
				</div>';
		echo '	<div class="modal-footer">
					<a href="?page=delete_date&date_cod='.$row['date_cod'].'" type="button" class="btn btn-danger">Excluir</a>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			  	</div>
			  </div>
  			</div>
		</div>';
		// delete modal - end
	}
	// prints the registers in each line - end
	?>
	</tbody>
</table>

</div>

</div>