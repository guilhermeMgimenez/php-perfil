<?php
include_once "sessao-login.php";
include_once "cabecalho.php";

?>
<main class="container">
    <div class="menu">
        <?php include_once "menu.php";?>
    </div>
<!-- <a href="logout.php">sair</a> -->
<h1>painel</h1>
<br>
<a href="relatorio.php" class="btn btn-primary">relatorio</a>

 <table class="table table-hover">
 <?php include_once "conexao.php";
 
  $sqlBusca = "select * from tb_perfis";
  $buscas = mysqli_query($conexao, $sqlBusca);
  while($coluna = mysqli_fetch_assoc($buscas)){
  ?>
  <tr>
    <td><?php echo $coluna['nome'];?></td>
    <td><?php echo $coluna['email'];?></td>
    <td><?php echo $coluna['profissao'];?></td>
  </tr>
  <?php
  }
  mysqli_close($conexao);
  ?>
 </table>

</main>
<?php include "rodape.php";?>