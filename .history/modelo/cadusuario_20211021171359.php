<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuário</title>
</head>
<body>
  <?php
    REQUIRE '../dao/daocadastro.php';
    REQUIRE '../dao/daocadastro.php';
    $nome = $_POST['nome'];
    $unome = $_POST['unome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

    $daocadastro = new daocadastro();
    $cadastro = new cadastro();
    $cadastro->setNome($nome);
    $cadastro->setUnome($unome);
    $cadastro->setCpf($cpf);
    $cadastro->setRg($rg);

    $resultado = $daocadastro->inclui($cadastro);
    if($resultado)
      echo 'cadastrado';

    else echo 'Erro';
  ?>
  <br>
  <a href="../index.php">Início</a>
  <a href="../cadusuario.php">Cadastrar</a>
</body>
</html>