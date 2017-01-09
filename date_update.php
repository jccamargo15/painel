<?php 
require_once 'settings.php';

// receive dates name and day
$date_name = $_POST['date_name'];
$date_date = $_POST['date_date'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// database query, update date
$query = "UPDATE tb_dates SET date_name = '$date_name', date_date = '$date_date' WHERE date_cod = ".$_GET['date_cod'];
mysqli_query($conn, $query);

// show sucess message
echo '<div class="alert alert-success"><strong>Successo!</strong> Data atualizada.</div>';

echo '</div>';
?>
