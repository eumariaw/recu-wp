<?php 
    final class Player{ //como o final de um novo usuário deve ser cadastrado

        public $name;
        public $login;
        public $password;
        public $email;

        public $listaPresentes = [];

        public function __construct($name, $login, $password, $email){ //construção de uma função

            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
            $this->email = $email;

        }
    }

?>