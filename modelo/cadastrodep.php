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
    $tipo = $_POST['tipo'];
    $resultado = [];

    $daocadastro = new daocadastro();
    $daodependente = new daodependente();
    $cadastro = new dependente();
    $cadastro->setNome($nome);
    $cadastro->setUnome($unome);
    $cadastro->setIdade($idade);


    if ($tipo == 1) {

      $cadastro->setPessoa($daocadastro->listaFuncionarioporid($id));
      $resultado = $daodependente->incluiDependenteFuncionario($cadastro);

      
    }else if($tipo == 2){
      print_r($cadastro);

      $cadastro->setPessoa($daocadastro->listaporid($id));
      $resultado = $daodependente->incluiDependenteCliente($cadastro);
    }


   

    if($resultado){
     ?>
     <script>alert("CADASTRADO")</script>
     <?php 
     $_SESSION['id'] = $id;
     $_SESSION['tipo'] = $tipo;
     header('location:listadependente.php');
    }
    else{
      ?>
      <script>alert("ERRO")</script>
      <?php 
    }
  ?>