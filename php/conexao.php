<?php
$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "bd_perfis";

try{
    $conexao = mysqli_connect($server , $user, $pass ,  $db);
}catch(Exception $e){
    echo "erro na conexão";
    exit();
}