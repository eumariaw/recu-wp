<?php
    include "cadastroLivros.inc.php"; //incluir nesta página
    session_start(); //iniciar sessão
    
    if (!isset($_SESSION["username"])){ //se a sessão de username for iniciada ela é buscado o login da pessoa para que ela consiga acessar o site tranquilamente
        if (!isset($_POST["login"])){ // caso não encontre ficará em um looping na página d elogin
            header('location: login.php'); 
            exit(); 
        }
        setcookie("username", $_POST["login"]); //registra no navegador da máquina
        $_SESSION["username"] = $_POST["login"];
    }

    if(!isset($_POST["id"])){
        $id = 1; // começa na página 1
    }else{
        $id = $_POST["id"]; //caso não comece na página 1 busca a página desejada
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> WastList </title>
    </head>
    
    <body>

        <main>

            <h1> MINHA LISTA DE LIVROS </h1>

        </main>
    </body>
</html>


