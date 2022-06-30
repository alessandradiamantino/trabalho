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
    $id = $_POST['id'];
    $idPessoa = $_POST['idPessoa'];
    $tipo = $_POST['tipo'];
    $resultado = [];
    print_r($_POST);


    $daocadastro = new daocadastro();
    $daodependente = new daodependente();
    $cadastro = new dependente();
    $cadastro->setId($id);
    $cadastro->setNome($nome);
    $cadastro->setUnome($unome);
    $cadastro->setIdade($idade);


    if ($tipo == 1) {

      $resultado = $daodependente->editaDependenteFuncionario($cadastro);
      
    }else if($tipo == 2){

      $resultado = $daodependente->editaDependenteCliente($cadastro);
    }   

    if($resultado){
     ?>
     <script>alert("Editado com sucesso")</script>
     <?php 
     $_SESSION['id'] = $idPessoa;
     $_SESSION['tipo'] = $tipo;
     header('location:listadependente.php');
    }
    else{
      ?>
      <script>alert("ERRO")</script>
      <?php 
    }
  ?>