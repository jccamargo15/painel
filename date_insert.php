<?php 
require_once 'settings.php';

// receive dates name and day
$date_name = $_POST['date_name'];
$date_date = $_POST['date_date'];

echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

// database query, insert new date
$query = "INSERT INTO tb_dates (date_name, date_date) VALUES ('$date_name', '$date_date')";
mysqli_query($conn, $query);

// show sucess message
echo '<div class="alert alert-success"><strong>Successo!</strong> Data registrada.</div>';

echo '</div>';
?>
