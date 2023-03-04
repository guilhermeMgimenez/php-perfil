<?php include "cabecalho.php"; ?>
<main>
    <form class="d-flex justify-content-center align-items-center" method="post" action="inserir-db.php"
        enctype="multipart/form-data">
        <div class="">
            <input id="form2" class="form-control" placeholder="nome de usuario" name="nome">
            <input id="form2" class="form-control" placeholder="E-mail" name="email">
            <input id="form2" class="form-control" placeholder="profissão" name="profissao">
            <textarea id="form2" class="form-control" placeholder="descrição" name="descricao"></textarea>
            <input id="form2" class="form-control" placeholder="instagram" name="instagram">
            <input id="form2" class="form-control" placeholder="twitter" name="twitter">
            <input id="form2" class="form-control" placeholder="facebook" name="facebook">
            <input id="form2" class="form-control" placeholder="linkedin" name="linkedin">
            <input id="form2" class="form-control" placeholder="youtube" name="youtube">
            <input id="form2" class="form-control" placeholder="senha" name="senha">
            <input type="file" name="foto">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <label>
                                <input type="radio" name="imagemradio" value="imagem1">
                                <img src="fundos/imagem1.jpg" alt="Imagem 1" class="img-fluid">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ratio ratio-1x1">
                            <label>

                                <input type="radio" name="imagemradio" value="imagem2">
                                <img src="fundos/imagem2.jpg" alt="Imagem 2" class="img-fluid">
                            </label>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ratio ratio-1x1">
                            <label>

                                <input type="radio" name="imagemradio" value="imagem3">
                                <img src="fundos/imagem3.jpg" alt="Imagem 3" class="img-fluid" for="imagemradio">
                            </label>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ratio ratio-1x1">
                            <label>

                                <input type="radio" name="imagemradio" value="imagem4">
                                <img src="fundos/imagem4.jpg" alt="Imagem 4" class="img-fluid" for="imagemradio">
                            </label>

                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info ms-2"><i class="bi bi-plus-circle-fill"></i>salvar</button>

        </div>
    </form>




</main>

<?php include "rodape.php"; ?>