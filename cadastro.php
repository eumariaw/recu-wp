<DOCTYPE html> <!dizer que o doc é em html>

<html lang = "pt-br"> <!linguagem>
    <head> <!cabeçalho>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "style.css">
        <title> ÁREA DE CADASTRO </title>
    </head>
    <body>
        <main>
            <h1> CADASTRO </h1>
            <form action = "index.php" method = "post"> <!para onde os dados recolhidos nesta página devem ser enviados>

                <div>
                    
                    <label for = "name"> Nome: </label> <!o que vai aparecer>
                    <input id = "name" type = "text" name = "name" required><br> <!identidade, tipo e nome de como e onde vai ser salvo >

                    <label for = "login"> Login: </label>
                    <input id = "login" type = "text" required><br>

                    <label for = "password"> Senha: </label>
                    <input id = "password" type = "password" required><br>

                    <label for = "email"> Email: </label>
                    <input id = "email" type = "email" required><br>
                
                </div>
                <input type = "submit" value = "OK" class = "botao"> <!tipo, valor e classificação da finalização do cadastro>

            </form>
        </main>

        <footer>
            <p> Já é cadastrado? Clique aqui <a href = "login.php"> Fazer login </a></p> <!caso a pessoa já seja cadastrada, ela vai para a página apenas de login, não será possível fazer o cadastro novamente>
        </footer>
    </body>
</html>