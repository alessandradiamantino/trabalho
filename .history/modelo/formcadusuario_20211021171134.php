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
    <main>
        <h1>Junte-se a nós :D</h1>
        <div class = "social-media">
            <a href="https://www.google.com.br/">
                <img src="assets\google.png" alt="Google">
            </a>
            <a href= "https://www.facebook.com.br"">
                <img src="assets\facebook.png" alt="Facebook">
            </a>
            <a href="https://www.linkedin.com">
                <img src="assets\linkedin.png" alt="LinkedIn">
            </a>
        </div>
        <div class="alternative">
            <span>OU</span>
        </div>
        <form action = "cadusuario.php" method = "post">
            <label for="nome">
                <span>Digite seu nome:</span>
                <input type = "text" id = "nome" name = "nome">
            </label>

            <label for="unome">
                <span>Digite seu último nome:</span>
                <input type = "text" id = "unome" name = "unome">
            </label>

            <label for="cpf">
                <span>Digite seu CPF:</span>
                <input type = "text" id = "CPF" name = "CPF">
            </label>

            <label for="RG">
              <span>Digite seu RG:</span>
              <input type = "text" id = "RG" name = "RG">
          </label>

            <input type = "submit" value = "Cadastrar!">
        </form>   
    </main>
    <section class = "images">
        <img src = "assets\039-id card.svg" alt = "Cartão identificador">
        <div class = "circle"></div>
    </section>
    <a href="../index.php">Início</a>
</body>
</html>