<?php 
	$call_cod = $_GET['call_cod']; //SELECT * FROM tb_calls WHERE call_cod = 2
	
	// database query, select call
	$query = mysqli_query ( $conn, "SELECT * FROM tb_calls WHERE call_cod = '$call_cod'" );
	$row = mysqli_fetch_assoc($query);
	$status = $row['call_status'];

	echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
	echo '<h1 class="page-header">'.$row['call_subject'].'</h1>';
?>

<div class="table-responsive">
			
<table class="table table-striped">
	<thead>
		<tr>
			<th>Resposta</th>
			<th>Data</th>
		</tr>
	</thead>
	<tbody>
	<?php 

	// database query, select call answers and order by date
	$query = mysqli_query ( $conn, "SELECT tb_clients.client_name, tb_answers.client_cod, tb_answers.answer_date, tb_answers.answer_text
									FROM tb_clients, tb_answers
									WHERE tb_answers.client_cod = tb_clients.client_cod
									AND tb_answers.call_cod = $call_cod
									ORDER BY tb_answers.answer_date DESC" );
	
	// list news - begin
	while($row = mysqli_fetch_assoc($query)) {
		echo '<tr>';
		echo '<td>Resposta de ' . $row['client_name'] . '</td>';
		echo '<td>' . date("d/m/Y h:m", strtotime($row['answer_date'])) . '</td>';
		echo '</tr>';
		echo '<tr><td colspan=2>'. html_entity_decode($row['answer_text']) .'</td></tr>';
	}
	// list news - end
	
	// if are waiting for a response, the answer hidden buttons and shut down, if not, show them
	if( ($status == 'answered') && (isset( $_COOKIE ["user_logged"])) ) {
		echo '<tr>';
		echo '<td><a href="?page=call&call_cod='.$call_cod.'" type="button" class="btn btn-primary">Responder</a></td>';
		echo '<td><a href="#" type="button" class="btn btn-danger">Encerrar</a></td>';
		echo '</tr>';
	}
	if( ($status == 'waiting') && (isset( $_COOKIE ["admin_logged"])) ) {
		echo '<tr>';
		echo '<td><a href="?page=call&call_cod='.$call_cod.'" type="button" class="btn btn-primary">Responder</a></td>';
		echo '<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal'.$row['client_cod'].'">Encerrar</a></td>';
		echo '</tr>';
	}
	?>	
	</tbody>
</table>
<!-- delete modal - begin -->
<div id="myModal<?php echo $row['client_cod']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title"><span class="label label-warning">Atenção</span></h2>
			</div>
			<div class="modal-body">
				<p>Tem CERTEZA que deseja encerrar este chamado?</p>
				<p>Não será mais possível interagir com o chamado.</p>
				<p>Esta ação não pode se desfeita!.</p>
			</div>
			<div class="modal-footer">
				<a href="?page=close_call&call_cod=<?php echo $call_cod; ?>" type="button" class="btn btn-danger">Encerrar</a>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
  	</div>
</div>
<!-- delete modal - end -->


</div>

</div>