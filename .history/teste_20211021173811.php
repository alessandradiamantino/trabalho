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
    <h1 align="center">DADOS CADASTRAIS</h1>
  
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
        <form action = "cadusuario.php" method = "post">
            <label for="nome">
                <span>Digite seu nome:</span>
                <input type = "text" id = "nome" name = "nome">
            </label>

            <label for="unome">
                <span>Digite seu último nome:</span>
                <input type = "text" id = "unome" name = "unome">
            </label>

            <label for="cpf">
                <span>Digite seu CPF:</span>
                <input type = "text" id = "cpf" name = "cpf">
            </label>

            <label for="rg">
              <span>Digite seu RG:</span>
              <input type = "text" id = "rg" name = "rg">
          </label>

            <input type = "submit" value = "Cadastrar!">
        </form>   
    </main>
    <section class = "images">
        <img src = "assets\039-id card.svg" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
    <a href="../index.php">Início</a>
</body>
</html>