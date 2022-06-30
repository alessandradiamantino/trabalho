<?php
       REQUIRE '../dao/daodependente.php';
       REQUIRE 'dependente.php';
       REQUIRE '../dao/conexao.php';
       REQUIRE '../dao/daocadastro.php';
       REQUIRE '../modelo/cadastro.php';



       $id = $_POST['id'];

       $daodependente = new daodependente();

       if ($daodependente->exclui($id)) {
           echo "sucesso";
       }

      
?>