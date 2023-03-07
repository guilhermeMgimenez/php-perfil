<?php
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$conteudo = "a";


include_once "conexao.php";
$sqlBusca = "select * from tb_perfis";
$buscas = mysqli_query($conexao, $sqlBusca);
$conteudo = "";
$conteudo .= "<table border='2' style='background:lightgrey'>";
$conteudo .= "<tr>";
    $conteudo .= "<td>Nome</td>";
    $conteudo .= "<td>E-mail</td>";
    $conteudo .= "</tr>";
    
while ($row = mysqli_fetch_assoc($buscas)) {
    $conteudo .= "<tr>";
    $conteudo .= "<td>". $row["nome"]."</td>";
    $conteudo .= "<td>". $row["email"]."</td>";
    $conteudo .= "</tr>";
}
$conteudo .= "</table>";
mysqli_close($conexao);
$dompdf->loadHtml($conteudo);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream("relatorio.pdf");
?>