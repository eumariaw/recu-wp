<?php
    session_start();
    require "player.php"; // requer player
    require "presentes.php";

    function presenteExiste ($fileName, $data){ //quando executa essa função irá chamar dois parâmetros e verifica se o usuário já existe
        $fileUsers = json_decode(file_get_contents($fileName)); //array com tudo o que tem no meu json
        foreach($fileUsers as $usuarios){
            if($usuarios->login == $_SESSION["name"]){
                for($i = 0; $i < count($usuarios->listaPresentes); $i++){
                    if($usuarios->listaPresentes[$i]->name == $_POST["name"]){
                        return TRUE;
                    }
                }
            }
        }
        return FALSE;
    }


    function presenteNovo ($fileName, $data){ //Cria novo usuário

        $fileUsers = json_decode(file_get_contents($fileName)); //transforma um arquivo num vetor
        $User_isset = presenteExiste($fileName, $data); //chama a função usuário existe 

        if ($User_isset) return TRUE; // caso seja verdade
        else{
            //array_push($contentData, $data); //cria
            foreach($fileUsers as $usuarios){
                if($usuarios->login == $_SESSION["name"]){
                    array_push($usuarios->listaPresentes, $data);
                }
            }
            file_put_contents($fileName, json_encode($fileUsers, JSON_PRETTY_PRINT));
            header ("Location: index.php");//coloca o dado dentro do arquivo ao mesmo tempo que a estrutura fica bonita
        }
    }

    $user = new Presente($_POST['name'], $_POST['tipo'], $_POST['cor'], $_POST['link']); //caos não exista cria aqui
    $insert = presenteNovo("player.json", $user);

?>