<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel = "stylesheet" href="../modelo/style.css">
</head>
<body>
    <main>
        <h1>Login</h1>
        <form action = "/modelo/validalogin.php" method = "post">
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
    </main>
</body>
</html>