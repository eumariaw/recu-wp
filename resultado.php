<?php

    require "player.json";

        use Intercom\IntercomCliente;
            $presente = new IntercomCliente (presentes);

        $cliente->leads->getLeads();

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