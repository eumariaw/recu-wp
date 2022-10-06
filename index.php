<?php
    session_start(); //iniciar sessão
    
    if (!isset($_SESSION["username"])){ //se a sessão de username for iniciada ela é buscado o login da pessoa para que ela consiga acessar o site tranquilamente
        if (!isset($_POST["login"])){ // caso não encontre ficará em um looping na página de login
            header('location: login.php'); 
            exit(); 
        }
        setcookie("username", $_POST["login"]); //registra no navegador da máquina
        $_SESSION["username"] = $_POST["login"];
    }

    if(!isset($_SESSION["name"]) || $_SESSION["name"] == ""){
        include "login.inc";

        $verificador = verificandoUsurario($_POST["login"], $_POST["password"], "player.json");

        if($verificador == FALSE){
            header("Location: login.php");
        }

        $_SESSION["name"] = $_POST["login"];
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

            <h1> MINHA LISTA DE PRESENTES </h1>

            <?php 
                $fileUsers = json_decode(file_get_contents("player.json")); //array com tudo o que tem no meu json
                foreach($fileUsers as $usuarios){
                    if($usuarios->login == $_SESSION["name"]){
                        echo "<hr>";
                        for($i = 0; $i < count($usuarios->listaPresentes); $i++){
                            echo "<p>" . $usuarios->listaPresentes[$i]->name . "</p>";
                            echo "<p>" . $usuarios->listaPresentes[$i]->tipo . "</p>";
                            echo "<p>" . $usuarios->listaPresentes[$i]->cor . "</p>";
                            echo "<p>" . $usuarios->listaPresentes[$i]->link . "</p>";
                            echo "<hr>";

                        }
                    }
                }
            ?>

        </main>
    </body>
</html>


