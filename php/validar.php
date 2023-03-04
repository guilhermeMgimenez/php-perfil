<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

include_once "conexao.php";
$sql = "SELECT * FROM tb_perfis WHERE email = '$usuario' and senha = '$senha'";
$dado = mysqli_query($conexao, $sql);
if($dado->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=invalido");
}

?>