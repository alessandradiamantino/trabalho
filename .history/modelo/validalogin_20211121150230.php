<?php
$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];
$daocadastro = new daocadastro();
$resultado = $daocadastro->validalogin($usuario, $senha);
if($resultado){
  ?>
  <script>alert("")</script>;
  <?php
}
else{
  ?>
  <script>alert("ERRO")</script>
  <?php 
}
?>