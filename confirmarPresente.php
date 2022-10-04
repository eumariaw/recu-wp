<?php

    session_start();

    include "presentes.php";
    include "player.php";

    $fileUsers = json_decode(file_get_contents("player.json"));
    $contentData = $fileUsers; 

    foreach ($contentData as $usuarios){
        if($usuarios->login == $_SESSION ["name"]){

            $presente = new Presente($_POST['name'], $_POST['tipo'], $_POST['cor'], $_POST['link']);
            array_push($usuario->listaPresentes, $presente);

            array($contentData); //cria um array
            file_put_contents("player.json", json_encode($contentData, JSON_PRETTY_PRINT));

            header ("Location: index.php");
        }
    }
?>