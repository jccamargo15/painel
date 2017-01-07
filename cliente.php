<?php
	// receive client code
	$cliente = $_GET['cliente'];
	// database query, select client to show information
	$query = mysqli_query ( $conn, "SELECT * FROM tb_clients WHERE client_cod='".$_GET['cliente']."'" );
	$row = mysqli_fetch_assoc($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<h1 class="page-header"><?php echo $row['client_name']; ?></h1>

<h3>E-mail: <?php echo $row['client_email']; ?></h3>

</div>
