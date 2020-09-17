<?php

    namespace Models;
    use Models\Person as Person;

    class Client extends Person{

        private $username;
        private $password;

        public function __construct($username, $password){
            
            $this->username = $username;
            $this->password = $password;

        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }



    }


?>