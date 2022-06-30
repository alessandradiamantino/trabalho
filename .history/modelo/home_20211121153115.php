<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bem-vindo <?php echo($cadastro->)?></h1>
  <?php session_start();
   REQUIRE '../dao/daocadastro.php';
   REQUIRE 'cadastro.php';
   REQUIRE '../dao/conexao.php';

  $result = $_SESSION['usuario'];
  $idcadastro = $result['id'];
  $daocadastro = new daocadastro();
  $cadastro = new cadastro();

  $cadastro = $daocadastro->listaporid($idcadastro);
  print_r($cadastro);
  ?>

</body>
</html>