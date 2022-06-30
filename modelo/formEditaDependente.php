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
   REQUIRE '../dao/conexao.php';
   REQUIRE '../dao/daocadastro.php';
   REQUIRE '../modelo/dependente.php';
   REQUIRE '../modelo/cadastro.php';


   $daodependente = new daodependente();
   $dependente = new Dependente();
   $id = $_POST['id'];
   $idPessoa = $_POST['idPessoa'];
   $nome = $_POST['nome'];
   $unome = $_POST['unome'];
   $idade = $_POST['idade'];
   $tipo = $_POST['tipo'];


   ?>
    <main>
        <h1>Editar dependente</h1>
        
        <form action = "./editaDependente.php" method = "post">
            <label for="nome">
                <span>Digite seu nome:</span>
                <input type = "text" id = "nome" name = "nome" value="<?php echo $nome ?>">
            </label>

            <label for="unome">
                <span>Digite seu último nome:</span>
                <input type = "text" id = "unome" name = "unome" value="<?php echo $unome ?>">
            </label>

            <label for="idade">
                <span>Digite sua idade:</span>
                <input type = "text" id = "idade" name = "idade" value="<?php echo $idade ?>">
            </label>
            <input type="hidden" name="idPessoa" id="idPessoa" value="<?php echo $idPessoa; ?>">

            <input type = "hidden" id = "id" name = "id" value = "<?php echo $id; ?>">
            <input type = "hidden" id = "tipo" name = "tipo" value = "<?php echo $tipo; ?>">
            <input type = "submit" value = "Editar!">
        </form>   
    </main>
    <section class = "images">
    <img src = ".\assets\039-id card.png" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
</body>
</html>