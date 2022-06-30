<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>

<?php
    
    REQUIRE '../dao/daodependente.php';
    REQUIRE 'dependente.php';
    REQUIRE '../dao/conexao.php';
    REQUIRE '../dao/daocadastro.php';
    REQUIRE '../modelo/cadastro.php';
    session_start();
    $id;
    $titulo;
    $tipo;
    if(isset($_POST['id'])){
      $id = $_POST['id'];
      $_SESSION['id'] = $id;
    }
    if(isset($_SESSION['id'])){
      $id = $_SESSION['id'];
    }
    
    

    if(isset($_SESSION['tipo'])){
      $tipo = $_SESSION['tipo'];
    }
    
    
    if (isset($_POST['tipo']) ){
      $tipo = $_POST['tipo'];
    }

    $dd = new daodependente();
    $dc = new daocadastro();
    $resultado;
    $pessoa = new Cadastro();


    if ($tipo == 1) {
      echo $id;
      $resultado = $dd->listaTodosFuncionario($id);
      $titulo = "FUNCIONARIO";
      $pessoa = $dc->listaFuncionarioporid($id);

    }else{
      $resultado = $dd->listaTodosCliente($id);
      $titulo = "CLIENTE";
      $pessoa = $dc->listaporid($id);

    }

?>

    <main>
    <h1 >LISTA DE DEPENDENTES DO <?php echo $titulo; echo ' '; echo strtoupper($pessoa->getNome()); ?></h1>
  
  <table id="tabela" class="tabela">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>ÚLTIMO NOME</th>
      <th>IDADE</th>
      <th>NOME SUPERIOR</th>
      <th>AÇÕES</th>
    </tr>
    <?php

      foreach ($resultado as $item){
        ?>
        <tr id='tr'>
          <th><?php echo $item['id']?></th>
          <th><?php echo $item['nome']?></th>
          <th><?php echo $item['unome']?></th>
          <th><?php echo $item['idade']?></th>
          <th><?php echo $pessoa->getNome(); echo ' '; echo $pessoa->getUnome();?></th>
          <th>
            <div class="action">
              <form action="./formEditaDependente.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $item['id']; ?>">
                <input type="hidden" name="idPessoa" id="idPessoa" value="<?php echo $id; ?>">
                <input type="hidden" name="nome" id="nome" value="<?php echo $item['nome']; ?>">
                <input type="hidden" name="unome" id="unome" value="<?php echo $item['unome']; ?>">
                <input type="hidden" name="idade" id="idade" value="<?php echo $item['idade']; ?>">
                <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo; ?>">
                <button class="editar">Editar</button>
              </form>
              <form id="formDeleta" action="" method="post">
                <input type="hidden" name="idPessoa" id="idPessoa" value="<?php echo $id; ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $item['id']; ?>">
                <input type="hidden" name="nome" id="nome" value="<?php echo $item['nome']; ?>">
                <input type="hidden" name="unome" id="unome" value="<?php echo $item['unome']; ?>">
                <input type="hidden" name="idade" id="idade" value="<?php echo $item['idade']; ?>">
                <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo; ?>">
                <?php

                if ($tipo == 1) {
                  ?>
                    <button type="submit" onclick=deletaFuncionario(); class="deletar" id="deletar">Deletar</button>
                  <?php
             
                }else{
                  ?>
                    <button type="submit" onclick=deletaCliente(); class="deletar" id="deletar">Deletar</button>
                <?php
                

                }

                ?>
              </form>
            </div>
            </th>
          
        </tr>
        <?php
      }
    ?>
  </table>
    </main>
    <section class = "images">
        <img src = "./assets/card.svg" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
    <a href="./home.php">Início</a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script>
      window.addEventListener('load', function(){
        document.getElementById('formDeleta').addEventListener('submit',function(event){
          event.preventDefault();
        });
      });
      function deletaCliente(){
        var r = confirm("Deseja realmente excluir o dependente?");    
          
          if (r == true) {
           console.log("Ok");

            var a = new FormData(document.getElementById('formDeleta'));
            var b = {method: "POST", body: a};
            fetch('./deletaDependente.php', b)
            .then(function (response){
              return response.text();
            })
            .then(function (text){
              alert(text);
            })
      }
      
    }

    function deletaFuncionario(){
        var r = confirm("Deseja realmente excluir o dependente?");    
          
          if (r == true) {
           console.log("Ok");

          var a = new FormData(document.getElementById('formDeleta'));
          var b = {method: "POST", body: a};
          fetch('./deletaDependenteFuncionario.php', b)
          .then(function (response){
            return response.text();
          })
          .then(function (text){
            alert(text);
          }) 
      }
      
    }

    </script>

</body>
</html>