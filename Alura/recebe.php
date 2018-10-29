<?php include 'cabecalho.php';
$nome = $_POST['nome'];
$ddd = $_POST['preco'];
$telefone = $_POST['telefone'];
$query = "insert into produtos (nome, preco) values ('".$nome."',".preco.")";
$conexao = mysqli_connect('localhost', 'glauco-magalhaes', 'Magalhaes1', 'loja');
?>
<body>
  <?php
  if(mysqli_query($conexao, $query)) {
  ?>
  <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
  <?php
  } else {
  ?>
  <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado</p>
  <?php
  }
  mysqli_close($conexao);
  ?>
<!--?php
<p class="alert-success">
Produto <?= $nome; ?> , <?= $ddd; ?> ,<?= $telefone; ?> cadastrado com sucesso</p>
-->

<?php include 'rodape.php';
