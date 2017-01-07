<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Chamados</h1>
<?php
	$client_cod = $_SESSION['client_cod'];
	//AND tb_calls.tb_clients_client_cod = '$client_cod'

	// database query, select news and order by date
	if ( isset( $_COOKIE ["admin_logged"] ) ) {
		$query = mysqli_query ( $conn, "SELECT tb_clients.client_name, tb_calls.tb_clients_client_cod, tb_calls.call_cod, tb_calls.call_subject, tb_calls.call_status, tb_calls.call_date
									FROM tb_clients, tb_calls
									WHERE tb_calls.tb_clients_client_cod = tb_clients.client_cod
									ORDER BY call_date DESC" );
	}
	
	if ( isset( $_COOKIE ["user_logged"] ) ) {
		$query = mysqli_query ( $conn, "SELECT tb_clients.client_name, tb_calls.tb_clients_client_cod, tb_calls.call_cod, tb_calls.call_subject, tb_calls.call_status, tb_calls.call_date
									FROM tb_clients, tb_calls
									WHERE tb_calls.tb_clients_client_cod = tb_clients.client_cod
									AND tb_calls.tb_clients_client_cod = '$client_cod'
									ORDER BY call_date DESC" );
		echo '<a href="?page=call" type="button" class="btn btn-success">Abrir Chamado</a>';
	}
?>

<div class="table-responsive">
			
<table class="table table-striped">
	<thead>
		<tr>
			<th>Assunto</th>
			<th>Autor</th>
			<th>Data</th>
			<th>Status</th>
			<!-- <th>Excluir</th> -->
		</tr>
	</thead>
	<tbody>
	<?php 
	// list news - begin
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td><a href="?page=answers&call_cod='.$row['call_cod'].'">' . $row['call_subject'] . '</a></td>';
		echo '<td>' . $row['client_name'] . '</td>';
		echo '<td>' . date("d/m/Y h:m", strtotime($row['call_date'])) . '</td>';
		if( $row['call_status'] == 'waiting' ) {
			if( isset( $_COOKIE ["admin_logged"] ) ) {
				echo '<td><a href="#" class="btn btn-warning btn-xs">Aguardando Resposta</a></td>';
			}
			if( isset( $_COOKIE ["user_logged"] ) ) {
				echo '<td><a href="#" class="btn btn-primary btn-xs">Em análise</a></td>';
			}
		}
		if( $row['call_status'] == 'answered' ) {
			if( isset( $_COOKIE ["admin_logged"] ) ) {
				echo '<td><a href="#" class="btn btn-primary btn-xs">Resposta enviada</a></td>';
			}
			if( isset( $_COOKIE ["user_logged"] ) ) {
				echo '<td><a href="#" class="btn btn-warning btn-xs">Respondido</a></td>';
			}
		}
		if( $row['call_status'] == 'closed' ) {
			echo '<td><a href="#" class="btn btn-danger btn-xs">Encerrado</a></td>';
		}
		//echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$row['call_cod'].'">Excluir</button></td>';
		echo '</tr>';
		// delete modal - begin
		echo '<div id="myModal'.$row['call_cod'].'" class="modal fade" role="dialog">
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
					<a href="?page=delete_news&news_cod='.$row['call_cod'].'" type="button" class="btn btn-danger">Excluir</a>
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