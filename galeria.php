<?php //session_start(); ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Galeria</h1>

<?php
	// database query to display data in alphabetical order
	//if a letter was pressed
	if( (isset($_GET['letter'])) && ($_GET['letter']!="@") ) {
		$query = mysqli_query ( $conn, "SELECT * FROM tb_galleries WHERE gallery_name LIKE '".$_GET['letter']."%'" );
	}
	// default query, select all
	else {
		$query = mysqli_query ( $conn, "SELECT * FROM tb_galleries" );
	}
?>

<!-- register button -->
<a href="?page=galeria_register" type="button" class="btn btn-success">Cadastrar Galeria</a>

<div class="table-responsive">

<!-- letter selection bar search -->			
<nav>
	<ul class="pagination pagination-sm">
		<li><a href="?letter=@">Todos</a></li>	    
	   	<?php 
			$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
			for($i=0;$i<count($letters);$i++) {
				echo '<li>';
				echo '<a href="?letter='.$letters[$i].'">';
				echo strtoupper($letters[$i]);
				echo '</a>';
				echo '</li>';
			}
		?>
	</ul>
</nav>
	
<!-- data table -->
<table class="table table-striped">
	<thead>
		<tr>
			<th>Galeria</th>
			<th>Foto</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	// prints the registers in each line - begin
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td>' . $row['gallery_name'] . '</td>';
		echo '<td><a href="?page=images&galeria='.$row['gallery_cod'].'" class="btn btn-primary btn-xs">Fotos</a></td>';
		echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$row['gallery_cod'].'">Excluir</button></td>';
		echo '</tr>';
		// delete modal - begin
		echo '<div id="myModal'.$row['gallery_cod'].'" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title"><span class="label label-warning">Atenção</span></h2>
						</div>
					<div class="modal-body">
					<p>Tem CERTEZA que deseja excluir este cliente?</p>
					<p>Além do cadastro, a pasta com TODOS os documentos do cliente também será deletada do servidor.</p>
					<p>Esta ação não pode se desfeita!.</p>
				</div>';
		echo '	<div class="modal-footer">
					<a href="?page=delete_client&client_cod='.$row['gallery_cod'].'&client_folder='.$row['gallery_folder'].'" type="button" class="btn btn-danger">Excluir</a>
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