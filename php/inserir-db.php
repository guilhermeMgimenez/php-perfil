
<?php
session_start();
$pasta = "img/";
$foto = $_FILES["foto"]["name"];

$extensao = explode(".", $foto);
$nomeNovoImg = round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["foto"]["tmp_name"],$pasta . $nomeNovoImg);

$_nomeImagem = ["$nomeNovoImg"];



$nome = $_POST["nome"];
$email = $_POST["email"];
$profissao = $_POST["profissao"];
$descricao = $_POST["descricao"];
$instagram = $_POST["instagram"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$linkedin = $_POST["linkedin"];
$youtube = $_POST["youtube"];
$senha = $_POST["senha"];
$nomeFoto = $nomeNovoImg;
$fundo = $_POST['imagemradio'];

include_once "conexao.php";
$senha = md5($senha);
$sql = "INSERT INTO tb_perfis (nome, email, profissao, descricao, instagram, twitter, facebook, linkedin, youtube, senha, foto, fundo) VALUES ('$nome', '$email', '$profissao', '$descricao', '$instagram', '$twitter', '$facebook', '$linkedin', '$youtube', '$senha', '$nomeFoto', '$fundo')";
mysqli_query($conexao, $sql);


?>









