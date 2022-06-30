<?php
REQUIRE '../dao/daocadastro.php';
REQUIRE 'cadastro.php';
REQUIRE '../dao/conexao.php';
session_start();

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


$resultado = $daocadastro->incluiFuncionario($cadastro, $senha);
if($resultado){
 ?>
 <script>alert("CADASTRADO")</script>
 <?php 
 $_SESSION["tipo"] = 1;
 header("Location:login.php");
}
else{
  ?>
  <script>alert("ERRO")</script>
  <?php 
}
?>