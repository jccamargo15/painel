<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header"><?php if (isset($_GET['news_cod'])) { echo "Editar"; } else { echo "Nova"; } ?> Notícia</h1>

<?php
	// if receive news code do the query to select news information
	if (isset($_GET['news_cod'])) {
		$query = mysqli_query ( $conn, "SELECT * FROM tb_news WHERE news_cod = ".$_GET['news_cod'] );
		$row = mysqli_fetch_assoc($query);
	}
?>

<!-- if is a edition, form action calls update file, else calls the poste file -->
<?php	if (isset($_GET['news_cod'])) { ?>
	<form action="?page=updatedata&news_cod=<?php echo $row['news_cod']; ?>" method="post">
<?php } else { ?>
	<form action="?page=posteddata" method="post">
<?php } ?>
	<!-- if is a edition, shows news title -->
	<input id="title" name="title" placeholder="nome" class="form-control input-md" required="" type="text" value="<?php if (isset($_GET['news_cod'])) { echo $row['news_title']; } ?>" >
	<br />
	<!-- textarea ckeditor -->
	<!-- if is a edition, fills the box with news content -->
	<textarea name="editor1" id="editor1" rows="10" cols="80">
		<?php if (isset($_GET['news_cod'])) echo html_entity_decode($row['news_text']); ?>
	</textarea>
	<script>
		// CKEditor script
		CKEDITOR.replace( 'editor1' );
	</script>
	<br />
	<button type="submit" class="btn btn-success">Postar Notícia</button>
</form>

</div>