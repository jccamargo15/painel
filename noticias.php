<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Notícias</h1>
<?php
	// database query, select news and order by date
	$query = mysqli_query ( $conn, "SELECT * FROM tb_news ORDER BY news_date DESC" );
?>

<a href="?page=editor" type="button" class="btn btn-success">Nova Notícia</a>

<div class="table-responsive">
			
<table class="table table-striped">
	<thead>
		<tr>
			<th>Título</th>
			<th>Data</th>
			<th>Capa</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	// list news - begin
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td><a href="?page=news&news_cod='.$row['news_cod'].'">' . $row['news_title'] . '</a></td>';
		echo '<td>' . date("d/m/Y", strtotime($row['news_date'])) . '</td>';
		echo '<td><a href="?page=cover_send&news_cod='.$row['news_cod'].'" class="btn btn-success btn-xs">Foto</a></td>';
		echo '<td><a href="?page=editor&news_cod='.$row['news_cod'].'" class="btn btn-primary btn-xs">Editar</a></td>';
		echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$row['news_cod'].'">Excluir</button></td>';
		echo '</tr>';
		// delete modal - begin
		echo '<div id="myModal'.$row['news_cod'].'" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title"><span class="label label-warning">Atenção</span></h2>
						</div>
					<div class="modal-body">
					<p>Tem CERTEZA que deseja excluir esta notícia?</p>
					<p>Esta ação não pode se desfeita!.</p>
				</div>';
		echo '	<div class="modal-footer">
					<a href="?page=delete_news&news_cod='.$row['news_cod'].'" type="button" class="btn btn-danger">Excluir</a>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			  	</div>
			  </div>
  			</div>
		</div>';
		// delete modal - end
	}
	// list news - end
	?>
	</tbody>
</table>


</div>

</div>