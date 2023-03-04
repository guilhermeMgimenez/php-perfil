<?php
$pasta = "img/";
$nomeDoArquivo = $_FILES["arquivo"]["name"];

// echo "<pre>";
$extensao = explode(".", $nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($extensao);

// print_r($_FILES["arquivo"]);
move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeNovo);



?>
<img src="<?php echo $pasta . $nomeDoArquivo; ?>">