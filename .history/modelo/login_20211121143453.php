<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="./modelo/style.css">
</head>
<body>
    <div class="container">
    <main>
        <h1>Junte-se a nós :D</h1>
        <div class = "social-media">
            <a href="https://www.google.com.br/">
                <img src=".\modelo\assets\google.png" alt="Google">
            </a>
            <a href= "https://www.facebook.com.br"">
                <img src=".\modelo\assets\facebook.png" alt="Facebook">
            </a>
            <a href="https://www.linkedin.com">
                <img src=".\modelo\assets\linkedin.png" alt="LinkedIn">
            </a>
        </div>
        <div class="alternative">
            <span>OU</span>
        </div>
        <form action = "./modelo/listadados.php" method = "post">
            <label for="usuario">
                <span>Usuário:</span>
                <input type = "text" id = "usuario" name = "usuario">
            </label>

            <label for="senha">
                <span>Senha:</span>
                <input type = "password" id = "senha" name = "senha">
            </label>
            <input type = "submit" value = "Cadastrar!">
        </form>   
    </main>
    </div>
</div>
</body>
</html>