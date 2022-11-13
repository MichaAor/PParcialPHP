<?php
namespace Model;

    class Car{
        private $idCar;
        private $name;
        private $active;

#CONSTRUCTOR --------------------------------
        public function __construct(){
        }

        public function __fromJson($idCar, $name, $active){
            $this->idCar = $idCar;
            $this->name = $name;
            $this->active = $active;
        }

        public function __fromRequest($name, $active){
            $this->name = $name;
            $this->active = $active;
        }

#GETTERS AND SETTERS
        public function getId(){
                return $this->idCar;
        }

        public function setId($idCar){
                $this->idCar = $idCar;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name)
        {
                $this->name = $name;
        }

        /**
         * Get the value of active
         */
        public function getActive()
        {
                return $this->active;
        }

        /**
         * Set the value of active
         */
        public function setActive($active)
        {
                $this->active = $active;
        }
    }
