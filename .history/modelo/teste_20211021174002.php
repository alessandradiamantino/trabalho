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
  
  <table border="5" cellspacing=".5" cellpadding="10" align="center">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>ÚLTIMO NOME</th>
      <th>CPF</th>
      <th>RG</th>
    </tr>
    <?php
      require '../dao/daocadastro.php';
      require '../dao/conexao.php';

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