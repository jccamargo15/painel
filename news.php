<?php
	// database query, select news information
	$query = mysqli_query ( $conn, "SELECT * FROM tb_news WHERE news_cod='".$_GET['news_cod']."'" );
	$row = mysqli_fetch_assoc($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header"><?php echo $row['news_title']; ?></h1>


<?php 
	// if news have a cover shows it
	if ($row['news_cover']) {
		echo '<center><img src="news/'.$row['news_cover'].'" width="500" /></center><br />';
	}
	
	// news text
	echo html_entity_decode($row['news_text']);
?>

</div>
