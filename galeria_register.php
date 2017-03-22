
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Cadastrar Galeria</h1>

    <!-- form action calls the cover_insert.php file and send the news code too  -->
    <form class="form-horizontal" name="file_send" action="?page=colunista_insert" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label" for="colunista_nome">Nome do Galeria</label>
                <div class="col-md-4">
                    <input id="colunista_nome" name="colunista_nome" placeholder="nome" class="form-control input-md" required="" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="colunista_info">Texto</label>
                <div class="col-md-4">
                    <textarea id="colunista_info" name="colunista_info" placeholder="nome" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="button1id" name="button1id" class="btn btn-success" type="submit">Enviar</button>
                    <button id="button2id" name="button2id" class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </div>
        </fieldset>
    </form>

</div>