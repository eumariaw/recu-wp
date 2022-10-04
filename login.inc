<?php

    function verificandoUsurario ($nome, $password, $fileName){
        
        $fileUsers = json_decode(file_get_contents($fileName));

        foreach($fileUsers as $usuarios){
            if($nome == $usuarios ->login && $senha == $usuarios->senha){
                return TRUE;
            }
        }
        return FALSE;
    }
?>