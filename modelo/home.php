<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet" href="./telas.css">
</head>
<body>
  <?php session_start();
   REQUIRE '../dao/daocadastro.php';
   REQUIRE 'cadastro.php';
   REQUIRE '../dao/conexao.php';

  $result = $_SESSION['usuario'];
  $idcadastro;
  
  $daocadastro = new daocadastro();
  $cadastro = new cadastro();

  $tipo = $_SESSION["tipo"];
  if ($tipo == 1) {
    $idcadastro = $result['idFuncionario'];
    $cadastro = $daocadastro->listaFuncionarioporid($idcadastro);
  }else{
    $idcadastro = $result['id'];
    $cadastro = $daocadastro->listaporid($idcadastro);
  }

  ?>
  <div class="all">
    
    <nav>
        <ul class="menu">
        <li>
          Usuários
          <ul class="submenu">
                    
                     <form action="./listaUsuarios.php" method="post">
                       <input type="hidden" name="id" id="id" value="<?php echo $idcadastro;?> ">
                       <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?> ">
                       <button type="submit" class="">Ver todos</button>
                     </form> 
                     </ul>
            <li>

                Dependentes
                <ul class="submenu">
                
                    <li>
                     <form action="./dependentetela.php" method="post">
                       <input type="hidden" name="id" id="id" value="<?php echo $idcadastro;?>">
                       <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?> ">
                       <button type="submit" class="">Cadastro</button>
                     </form> 
                     </li>
                    <li>
                     <form action="./listadependente.php" method="post">
                       <input type="hidden" name="id" id="id" value="<?php echo $idcadastro;?> ">
                       <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?> ">
                       <button type="submit" class="">Ver todos</button>
                     </form> 
              </li>
                </ul>
            </li>
            <li>
            <a href="../index.php" text-decoration="none">Sair</a>
                
            </li>
        </ul>
    </nav>
    <div class="container">
  <h1>Bem-vindo(a), <?php echo($cadastro->getNome());?></h1>
    </div>
</div>
</body>

</html>