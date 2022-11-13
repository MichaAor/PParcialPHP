<?php
namespace Model;

    class User {
        private $idUser;
        private $email;
        private $password;

        public function __construct(){
        }

        public function __fromRequest($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        public function __fromJson($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        public function getIdUser(){
                return $this->idUser;
        }
        public function setIdUser($idUser){
                $this->idUser = $idUser;
        }

        public function getEmail(){
                return $this->email;
        }
        public function setEmail($email){
                $this->email = $email;
        }

        public function getPassword(){
                return $this->password;
        }
        public function setPassword($password)
        {
                $this->password = $password;
        }
    }
?>