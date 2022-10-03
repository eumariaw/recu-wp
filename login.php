<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> ÁREA DE LOGIN </title>
    </head>

    <body>

        <main>

            <h1>LOGIN</h1>
            <form action = "index.php" method = "post">

                <div>

                    <label for = "login"> Nome de usuário:</label>
                    <input id = "login" type = "text" name = "login" required><br>

                    <label for = "password"> Senha:</label>
                    <input id = "password" type = "password" name = "password" required><br>

                </div>
                <input type = "submit" value = "OK" class = "botao"><br>

            </form>

        </main>

        <footer class = "login_footer">
        <p> Não tem cadastro? Clique aqui <a href = "cadastro.php"> Fazer cadastro </a></p>
        </footer>

    </body>
</html>