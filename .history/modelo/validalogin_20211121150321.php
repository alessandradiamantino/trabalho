<?php
$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];
$daocadastro = new daocadastro();
$resultado = $daocadastro->validalogin($usuario, $senha);
if($resultado == false){
  ?>
  <script>alert("ERRO")</script>;
  <?php
}
else{
  ?>
  <script>alert("")</script>
  <?php 
}
?>