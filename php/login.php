

<?php include "cabecalho.php"; ?>
<main>
    <form action="validar.php" class="d-flex justify-content-center align-items-center" method="post">
    <div class="">
        <input required id="form2" class="form-control" placeholder="usuario" name="usuario">
    </div>
    <div class="">
        <input required id="form2" type="pass" class="form-control" placeholder="senha" name="senha">
    </div>
    <button type="submit" class="btn btn-info ms-2"><i class="bi bi-plus-circle-fill"></i>login</button>
<hr>
</main>
<?php include "rodape.php"; ?>
