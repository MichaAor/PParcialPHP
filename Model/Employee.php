<?php 
namespace Model;
use \Model\Car;

    class Employee{
        private $idClient;
        private $firstName;
        private $lastName;
        private $email;
        private $dni;
        private Car $car;

        public function __construct(){

        }

        public function __toJson($idClient, $firstName, $lastName, $email, $dni,Car $car){
            $this->idClient = $idClient;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->dni = $dni;
            $this->car = $car;
        }

        public function __toRequest( $firstName, $lastName, $email, $dni,Car $car){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->dni = $dni;
            $this->car = $car;
        }


        
        

        /**
         * Get the value of idClient
         */
        public function getId()
        {
                return $this->idClient;
        }

        /**
         * Set the value of idClient
         */
        public function setId($idClient): self
        {
                $this->idClient = $idClient;

                return $this;
        }

        /**
         * Get the value of firstName
         */
        public function getFirstName()
        {
                return $this->firstName;
        }

        /**
         * Set the value of firstName
         */
        public function setFirstName($firstName): self
        {
                $this->firstName = $firstName;

                return $this;
        }

        /**
         * Get the value of lastName
         */
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         */
        public function setLastName($lastName): self
        {
                $this->lastName = $lastName;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of dni
         */
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         */
        public function setDni($dni): self
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of car
         */
        public function getCar(): Car
        {
                return $this->car;
        }

        /**
         * Set the value of car
         */
        public function setCar(Car $car): self
        {
                $this->car = $car;

                return $this;
        }
}?>