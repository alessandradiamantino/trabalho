<?php
section_start();
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