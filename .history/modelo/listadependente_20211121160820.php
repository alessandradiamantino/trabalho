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

    <main>
    <h1 align="center">LISTA DE DADOS</h1>
  
  <table class="tabela">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>ÚLTIMO NOME</th>
      <th>IDADE</th>
      <th>NOME SUPERIOR</th>
    </tr>
    <?php
        REQUIRE '../dao/daodependente.php';
        REQUIRE 'dependente.php';
        REQUIRE '../dao/conexao.php';
        REQUIRE '../dao/daocadastro.php';
        REQUIRE '../modelo/cadastro.php';
      session_start();
     
        if(isset($_SESSION['id'])){
          $id = $_POST['id'];
      }
      if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
      }
      $dd = new daodependente();
      $dc = new daocadastro();
      $resultado = $dd->listaTodos($id);
      $cliente = new Cadastro();

      foreach ($resultado as $item){
        $cliente = $dc->listaporid($item['idcliente']);
        ?>
        <tr>
          <th><?php echo $item['id']?></th>
          <th><?php echo $item['nome']?></th>
          <th><?php echo $item['unome']?></th>
          <th><?php echo $item['idade']?></th>
          <th><?php echo $cliente->getNome(); echo ' '; echo $cliente->getUnome();?></th>
          
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