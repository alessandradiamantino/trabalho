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
    <div class="all">
    <nav>
        <ul class="menu">
            <li>
                Cadastros
                <ul class="submenu">
                    <li>Usuários</li>
                    <li>Dependentes</li>
                </ul>
            </li>
            <li>
                Sair
            </li>
        </ul>
    </nav>
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
                <input type = "text" id = "usuario" name = "nome">
            </label>

            <label for="unome">
                <span>Senha:</span>
                <input type = "text" id = "unome" name = "unome">
            </label>

            <label for="cpf">
                <span>Digite seu CPF:</span>
                <input type = "text" id = "cpf" name = "cpf">
            </label>

            <label for="rg">
              <span>Digite seu RG:</span>
              <input type = "text" id = "rg" name = "rg">
          </label>

            <input type = "submit" value = "Cadastrar!">
        </form>   
    </main>
    <section class = "images">
        <img src = ".\modelo\assets\039-id card.svg" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
    </div>
</div>
</body>
</html>