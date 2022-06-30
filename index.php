<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="./index.css">
</head>
<body background="./modelo/assets/bg.png">
  <div class="tudo">
  <h1>Bem-vindo(a) ao Cadastros, clique em seu determinado login:</h1>
    <div class="corpo">
      <div class="login">
        <div class="botao">
    <form action="./modelo/login.php" method="post">
      <input type="hidden" value="2" name="tipo" id="tipo">
      <button type="submit">Login para clientes</button>
    </form>
    <form action="./modelo/login.php" method="post">
      <input type="hidden" value="1" name="tipo" id="tipo">
      <button type="submit">Login para funcionários</button>
</div>
</div>
    </form>
    </div>
  </div>
  
</body>
</html>