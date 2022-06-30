<?php
  REQUIRE '../dao/daocadastro.php';
  REQUIRE 'cadastro.php';
  REQUIRE '../dao/conexao.php';
  
session_start();
$usuario = filter_input(INPUT_POST, 'usuario'); 
$senha = filter_input(INPUT_POST, 'senha'); 
$tipo;

if (isset($_POST["tipo"])) {
   $tipo = $_POST["tipo"];
}

$daocadastro = new daocadastro();
$cadastro = new cadastro();
if ($tipo == 1) {
 
  $resultado = $daocadastro->validaloginFuncionario($usuario, $senha);
}else{
  $resultado = $daocadastro->validaloginCliente($usuario, $senha);
}

if(empty($resultado)){
  
  $_SESSION["tipo"] = $tipo;
  $_SESSION["mensagem"] = "Erro ao realizar login";
  header("location: ./login.php?erro=Erro ao realizar login");

}else{
  $_SESSION["usuario"] = $resultado;
  $_SESSION["tipo"] = $tipo;
  unset ($_SESSION["mensagem"]);
  header("location: ./home.php");
}


?>
