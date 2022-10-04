<?php
    require "player.php"; // requer player

    function UsuarioExiste ($fileName, $data){ //quando executa essa função irá chamar dois parâmetros e verifica se o usuário já existe

        $fileUsers = json_decode(file_get_contents($fileName)); //array com tudo o que tem no meu json


        foreach ($fileUsers as $usuarios){ //fileusers é o nome do vetor que quero passar e usuarios é cada posição
            if($usuarios->login == $data->login || $usuarios->email == $data->email){
                return TRUE;
            } // testa se o login e email correspondem, é verdade
        }

        return FALSE; // caso não, é falso
    }


    function UsuarioNovo ($fileName, $data){ //Cria novo usuário

        $fileUsers = json_decode(file_get_contents($fileName)); //transforma um arquivo num vetor
        $contentData = $fileUsers; //iguala ambos
        $User_isset = UsuarioExiste($fileName, $data); //chama a função usuário existe 

        if ($User_isset) return TRUE; // caso seja verdade
        else{
            array($contentData); //cria um array
            array_push($contentData, $data); //cria
            file_put_contents($fileName, json_encode($contentData, JSON_PRETTY_PRINT));//coloca o dado dentro do arquivo ao mesmo tempo que a estrutura fica bonita
        }
    }

    $user = new Player($_POST['name'], $_POST['login'], $_POST['password'], $_POST['email']); //caos não exista cria aqui
    $insert = UsuarioNovo("player.json", $user);

    if($insert)header("Location: loginCadastrado.php"); //caso exista só busca e manda pro index
    else header("Location: login.php");
?>