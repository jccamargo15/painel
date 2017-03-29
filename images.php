<?php 
    $gallery_cod = $_GET['galeria'];

    $query = mysqli_query ( $conn, "SELECT galeria.gallery_cod, galeria.gallery_name, galeria.gallery_text, imagens.image_name, imagens.image_cod FROM tb_galleries AS galeria, tb_images AS imagens WHERE galeria.gallery_cod = $gallery_cod AND imagens.image_gallery = $gallery_cod" );   
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="topo">

    <h1 class="page-header">Imagens</h1>

    <a href="?page=image_send&galeria=<?php echo  $gallery_cod; ?>&image_action=new" type="button" class="btn btn-success">Inserir Imagem</a>

    <br><br>
    
    <div class="row">
    <?php 
        while($row = mysqli_fetch_assoc($query)) {
            echo '<div class="col-sm-6 col-md-4"><div class="thumbnail">';
            echo '<img src="galleries/'.$gallery_cod.'/'.$row['image_name'].'" alt="...">';
            echo '<div class="caption">';
            //echo '<p>Inserido em: 18/08/2016</p>';
            echo '<p>';
            echo '<a href="?page=image_send&galeria='.$gallery_cod.'&image_cod='.$row['image_cod'].'&image_name='.$row['image_name'].'&image_action=change" class="btn btn-primary" role="button">Alterar</a> ';
            echo ' <a href="?page=image_insert&image_action=delete" class="btn btn-danger" role="button">Remover</a>';
            echo '</p>';
            echo '</div>';
            echo '</div></div>';
        }
    ?>
    </div>

</div>