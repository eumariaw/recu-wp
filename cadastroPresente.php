<DOCTYPE html> <!dizer que o doc é em html>

<html lang = "pt-br"> <!linguagem>
    <head> <!cabeçalho>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "style.css">
        <title> Cadastro de presente </title>
    </head>
    <body>
        <main>
            <h1> CADASTRO DE PRESENTE </h1>
            <form action = "confirmarPresente.php" method = "post"> <!para onde os dados recolhidos nesta página devem ser enviados>

                <div>
                    
                    <label for = "name"> Nome: </label> <!o que vai aparecer>
                    <input id = "name" type = "text" name = "name" required><br> <!identidade, tipo e nome de como e onde vai ser salvo >

                    <label for = "tipo"> Tipo: </label>
                    <input id = "tipo" type = "text" name = "tipo" required><br>

                    <label for = "cor"> Cor: </label>
                    <input id = "cor" type = "cor" name = "cor" required><br>

                    <label for = "link"> Link: </label>
                    <input id = "link" type = "link" name = "link" required><br>
                
                </div>
                <input type = "submit" value = "OK" class = "botao"> <!tipo, valor e classificação da finalização do cadastro>

            </form>
        </main>
    </body>
</html>