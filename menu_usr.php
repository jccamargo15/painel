<div class="col-sm-3 col-md-2 sidebar">
	
	<div class="negative_logo">
		<img alt="<?php echo $nome_empresa; ?>" src="images/<?php echo $logo_empresa_negativo; ?>.png">
	</div>

	<ul class="nav nav-sidebar">
		<?php
			//database query, count how many calls are waiting to be answered
			$query = "SELECT COUNT(*) FROM tb_calls WHERE call_status = 'answered'";
			$query = mysqli_query($conn, $query);
			$badge = mysqli_fetch_array($query);
		
		
			// start variable that show highlight menu
			if ( empty($_GET["page"]) ) {
				$active_menu = "folder";
			}
			else {
				$active_menu = $_GET["page"];
			}
		?>
		<!-- verify veriable to select list item -->
		<li <?php if($active_menu == 'folder') echo 'class="active"';?>>
			<a href="?page=folder">Documentos<?php if($active_menu == 'folder') echo '<span class="sr-only">(current)</span>';?></a>
		</li>
		<li <?php if($active_menu == 'chamados') echo 'class="active"';?>>
			<a href="?page=chamados">Chamados
			<?php 
				if($active_menu == 'chamados') echo '<span class="sr-only">(current)</span>';
				if($badge[0] > 0) echo ' <span class="badge">' . $badge[0] . '</span></a>';
			?></a>
		</li>
		<li <?php if($active_menu == 'senha') echo 'class="active"';?>>
			<a href="?page=senha">Trocar Senha<?php if($active_menu == 'senha') echo '<span class="sr-only">(current)</span>';?></a>
		</li>
		<li>
			<a href="logoff.php">Sair</a>
		</li>
	</ul>
</div>