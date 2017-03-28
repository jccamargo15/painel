<?php 
    $gallery_cod = $_GET['galeria'];

    $query = mysqli_query ( $conn, "SELECT galeria.gallery_cod, galeria.gallery_name, galeria.gallery_text, imagens.image_name
                FROM tb_galleries AS galeria, tb_images AS imagens
                WHERE galeria.gallery_cod = $gallery_cod AND imagens.image_gallery = $gallery_cod" );   
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="topo">

    <h1 class="page-header">Imagens</h1>

    <a href="?page=image_send&galeria=<?php echo  $gallery_cod; ?>" type="button" class="btn btn-success">Inserir Imagem</a>

    <br><br>
    
    <div class="row">
    <?php 
        while($row = mysqli_fetch_assoc($query)) {
            echo '<div class="col-sm-6 col-md-4"><div class="thumbnail">';
            echo '<img src="galleries/'.$gallery_cod.'/'.$row['image_name'].'" alt="...">';
            echo '<div class="caption">';
            //echo '<p>Inserido em: 18/08/2016</p>';
            echo '<p>';
            echo '<a href="?page=image_insert&subject=homepage&type=lateral&number=1" class="btn btn-primary" role="button">Alterar</a> ';
            echo ' <a href="?page=image_insert&subject=homepage&type=lateral&number=1" class="btn btn-danger" role="button">Remover</a>';
            echo '</p>';
            echo '</div>';
            echo '</div></div>';
        }
    ?>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/gallery_image.jpg" alt="...">
                <div class="caption">
                    <p>Inserido em: 18/08/2016</p>
                    <p>
                        <a href="?page=banner_send&subject=homepage&type=lateral&number=1" class="btn btn-primary" role="button">Alterar</a>
                        <a href="?page=banner_send&subject=homepage&type=lateral&number=1" class="btn btn-danger" role="button">Remover</a>
                    </p>
                </div>
            </div>
        </div> 
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/gallery_image.jpg" alt="...">
                <div class="caption">
                    <p>Inserido em: 18/08/2016</p>
                    <p>
                        <a href="?page=banner_send&subject=homepage&type=lateral&number=2" class="btn btn-primary" role="button">Alterar/Inserir</a>
                    </p>
                </div>
            </div>
        </div> 
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/gallery_image.jpg" alt="...">
                <div class="caption">
                    <p>Inserido em: 18/08/2016</p>
                    <p>
                        <a href="?page=banner_send&subject=homepage&type=lateral&number=3" class="btn btn-primary" role="button">Alterar/Inserir</a>
                    </p>
                </div>
            </div>
        </div> 
    </div>


</div>