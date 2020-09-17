<?php

    namespace Models;

    abstract class Person{
        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        public function __construct($id, $firstName, $lastName, $dni, $email){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dni= $dni;
            $this->email= $email;
        }
        
        public function getID(){
            return $this->id;
        }

        public function getFirstName(){
            return $this->firstName;
        }
        
        public function getLastName(){
            return $this->lastName;
        }
        
        public function getDni(){
            return $this->dni;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        
    }

?>