<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
<?php
    REQUIRE '../dao/daocadastro.php';
    REQUIRE 'cadastro.php';
    REQUIRE '../dao/conexao.php';

    $nome = $_POST['nome'];
    $unome = $_POST['unome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $senha = $_POST['senha'];

    $daocadastro = new daocadastro();
    $cadastro = new cadastro();
    $cadastro->setNome($nome);
    $cadastro->setUnome($unome);
    $cadastro->setCpf($cpf);
    $cadastro->setRg($rg);
    

    $resultado = $daocadastro->inclui($cadastro);
    if($resultado){
     ?>
     <script>alert("CADASTRADO")</script>
     <?php 
    }
    else{
      ?>
      <script>alert("ERRO")</script>
      <?php 
    }
  ?>
    <main>
    <h1 align="center">LISTA DE DADOS</h1>
  
  <table class="tabela">
  
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>ÚLTIMO NOME</th>
      <th>CPF</th>
      <th>RG</th>
    </tr>
    <?php

      $dc = new daocadastro();
      $resultado = $dc->listaTodos();

      foreach ($resultado as $item){
        ?>
        <tr>
          <th><?php echo $item['id']?></th>
          <th><?php echo $item['nome']?></th>
          <th><?php echo $item['unome']?></th>
          <th><?php echo $item['cpf']?></th>
          <th><?php echo $item['rg']?></th>
        </tr>
        <?php
      }
    ?>
  </table>
    </main>
    <section class = "images">
        <img src = "assets\039-id card.svg" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
    <a href="../index.php">Início</a>
</body>
</html>