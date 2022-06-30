<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet" href="./style.css">
</head>
<body>

  <?php session_start();
   REQUIRE '../dao/daocadastro.php';
   REQUIRE 'cadastro.php';
   REQUIRE '../dao/conexao.php';

  $result = $_SESSION['usuario'];
  $idcadastro = $result['id'];
  $daocadastro = new daocadastro();
  $cadastro = new cadastro();

  $cadastro = $daocadastro->listaporid($idcadastro);
  ?>
  <div class="all">
    <nav>
        <ul class="menu">
            <li>
                Dependentes
                <ul class="submenu">
                    <li>
                     <form action="./dependentetela.php" method="post">
                       <input type="hidden" name="id" id="id" value="<?php echo $idcadastro;?> >">
                       <button type="submit" class="">Cadastro</button>
                     </form> 
                     </li>
                    <li>
                     <form action="./listadependente.php" method="post">
                       <input type="hidden" name="id" id="id" value="<?php echo $idcadastro;?> >">
                       <button type="submit" class="">Ver</button>
                     </form> 
</li>

        
                </ul>
            </li>
            <li>
                Sair
            </li>
        </ul>
    </nav>
    <div class="container">
  <h1>Bem-vindo <?php echo($cadastro->getNome());?></h1>
    </div>
</div>
</body>
</html>