<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="../modelo/login.css">
    <style>
        .cadastre{
            margin-top: 10px;
        }
        .cadastre button{
            background-color: transparent;
            color: black;
            cursor: pointer;
        }
        .cadastre button:hover{
            transition: 0.4s;
            color: #D45263;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    
    
    $tipo;
    $url;
    $titulo;

    if (isset($_SESSION["tipo"]) || isset($_POST["tipo"])) {
        if (isset($_SESSION["tipo"])) {
            $tipo = $_SESSION["tipo"];         
         }
         if(isset($_POST["tipo"])){
            $tipo = $_POST["tipo"];      
        }
    
    }else{
        $tipo = 2;
    }  

    if ($tipo == 1) {
        $url = "./formCadastroFuncionario.php";
        $titulo = " de Funcionário";
    }else{
        $url = "./formCadastroCliente.php";
        $titulo = " de Cliente";
    }
    
        
    ?>
    <main>
        <h1>Login <?php echo $titulo ?></h1>
        <?php
            if (isset($_GET['erro'])) {
                echo $_GET['erro'];

            }
        ?>
        <form action = "./validalogin.php" method = "post">
            <input type="hidden" value="<?php echo $tipo ?>" name="tipo" id="tipo">
            <label for="usuario">
                <span>Usuário:</span>
                <input type = "text" id = "usuario" name = "usuario">
            </label>

            <label for="senha">
                <span>Senha:</span>
                <input type = "password" id = "senha" name = "senha">
            </label>
            <input type = "submit" value = "Entrar!">
        </form> 
        <form class="cadastre" action="<?php echo $url; ?>" method="post">
            <button type="submit">ou cadastre-se</button>
        
        </form>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script>
      
      function validaCampos(){
          let usuario = document.getElementById("usuario").value;
          let senha = document.getElementById("senha").value;

          
          if(usuario== '' || senha == ''){
            alert("Preencha todos os campos!");
          }else{
          let dados = {
              usuario: 'usuario',
              senha:'senha'      
            }

            let config = {
                method: 'post',
                body:dados
            } ;

            fetch('http://localhost/trabalhoalessandra/modelo/validalogin.php', config)
            .then(function(response){
                return response.json;
            })
            .then(function(json){
                if (json.status == 'ok') {
                    alert('Sucesso');
                    console.log('entrou');
                    window.location.href = "/trabalhoalessandra/modelo/home.php"; 
                    event.preventDefault();

                }else{
                    alert('Erro');
                }
            });


              /*
            $.ajax({
              type:"POST", 
              url:"./validalogin.php",
              data:{
                  "usuario": usuario,
                  "senha": senha
              },
              dataType:"json",
              success: function (response){   
                if (response==true) {
                    alert("entrou");
                    window.location.href = "./home.php"; 
                }
                     
              }
             }); 
             
             */
          }

          
        
    }

    </script>
</body>
</html>