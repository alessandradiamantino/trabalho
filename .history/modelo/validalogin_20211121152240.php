<?php
  REQUIRE '../dao/daocadastro.php';
  REQUIRE 'cadastro.php';
  REQUIRE '../dao/conexao.php';
session_start();
$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];
$daocadastro = new daocadastro();
$cadastro = new cadastro();
$resultado = $daocadastro->validalogin($usuario, $senha);
print_r($resultado);
if($resultado == false){
  ?>
  <script>alert("ERRO")</script>;
  <?php
}
else{
 $_SESSION["usuario"] = $resultado;
 header("Location: ./home.php");
}
?>
