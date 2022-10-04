<?php 
    final class Presente{ //como o final de um novo usuário deve ser cadastrado

        public $name;
        public $tipo;
        public $cor;
        public $link;

        public function __construct($name, $tipo, $cor, $link){ //construção de uma função

            $this->name = $name;
            $this->tipo = $tipo;
            $this->cor = $cor;
            $this->link = $link;
        }
    }

?>