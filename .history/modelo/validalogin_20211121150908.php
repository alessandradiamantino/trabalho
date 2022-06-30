<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
session_start();
$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];
$daocadastro = new daocadastro();
$cadastro = new cadastro();
$resultado = $daocadastro->validalogin($usuario, $senha);
if($resultado == false){
  ?>
  <script>alert("ERRO")</script>;
  <?php
}
else{
 $_SESSION["usuario"] = $resultado;
 header("Location: ./modelo/home.php");
}
?>
</body>
</html>