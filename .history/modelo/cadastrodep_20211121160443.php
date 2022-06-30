<?php
session_start();
    REQUIRE '../dao/daodependente.php';
    REQUIRE 'dependente.php';
    REQUIRE '../dao/conexao.php';
    REQUIRE '../dao/daocadastro.php';
    REQUIRE '../modelo/cadastro.php';

    $nome = $_POST['nome'];
    $unome = $_POST['unome'];
    $idade = $_POST['idade'];
    $idcliente = $_POST['idcliente'];

    $daocadastro = new daocadastro();
    $daodependente = new daodependente();
    $cadastro = new dependente();

    $cadastro->setNome($nome);
    $cadastro->setUnome($unome);
    $cadastro->setIdade($idade);
    $cadastro->setCliente($daocadastro->listaporid($idcliente));

    $resultado = $daodependente->inclui($cadastro);
    if($resultado){
     ?>
     <script>alert("CADASTRADO")</script>
     <?php 
     
     header('location:listadependente.php');
    }
    else{
      ?>
      <script>alert("ERRO")</script>
      <?php 
    }
  ?>