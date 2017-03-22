<div class="col-sm-3 col-md-2 sidebar">

	<div class="negative_logo">
		<img alt="<?php echo $nome_empresa; ?>" src="images/<?php echo $logo_empresa_negativo; ?>.png">
	</div>
	
	<ul class="nav nav-sidebar">
		<?php
			//database query, count how many calls are waiting to be answered
			$query = "SELECT COUNT(*) FROM tb_calls WHERE call_status = 'waiting'";
			$query = mysqli_query($conn, $query);
			$badge = mysqli_fetch_array($query);
			
			// start variable that show highlight menu
			if ( empty($_GET["page"]) ) {
				$active_menu = "clientes";
			}
			else {
				$active_menu = $_GET["page"];
			}
			
			// array with side menu itens
			$side_menu_itens = array("Clientes", "Notícias", "Galeria", "Histórico", "Chamados", "Depoimentos", "Trocar Senha");
			$side_menu_links = array("clientes", "noticias", "galeria", "historico", "chamados", "depoimentos", "senha");
			
			for($i=0; $i<count($side_menu_itens); $i++) {
				// verify veriable to select list item
				if( $active_menu == turn_to_link($side_menu_itens[$i]) ) {
					echo '<li class="active">';
				}
				else {
					echo '<li>';
				}
				echo '<a href="?page=';
				// generate link using array menu itens
				//// echo turn_to_link($side_menu_itens[$i]) . '">';
				echo $side_menu_links[$i] . '">';
				echo $side_menu_itens[$i];
				// if active link == page name, highlight menu
				if( $active_menu == $side_menu_links[$i] ) {
					echo ' <span class="sr-only">(current)</span>';
				}
				if( ($side_menu_links[$i] == 'chamados') && ($badge[0] > 0) ) {
					echo ' <span class="badge">' . $badge[0] . '</span></a>';
				}
				echo '</a></li>';
			}
		?>
		<li><a href="logoff.php">Sair</a></li>
	</ul>
</div>