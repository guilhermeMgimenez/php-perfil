<?php
session_start();
$pasta = "img/";
$foto = $_FILES["foto"]["name"];

$extensao = explode(".", $foto);
$nomeNovoImg = round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["foto"]["tmp_name"],$pasta . $nomeNovoImg);
 print_r($nomeNovoImg);


$_nomeImagem = ["$nomeNovoImg"];
?>
<img src="<?php echo $pasta . $nomeNovoImg; ?>">