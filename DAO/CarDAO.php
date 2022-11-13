<?php
namespace DAO;
use \Model\Car as Car;

    class CarDAO{
        private $carList = array();
        private $filename = "Data/Car.json";

        public function __construct(){    
        }


        public function GetAll(){
            $this->GetD();
        return $this->carList;
        }

        public function Get($idCar){
            $car = new Car();
            return $car;
        }

        public function Add(){

        }

        public function Update(){

        }

        public function Delete(){

        }

        private function GetD(){
            $this->carList = array();
            if(file_exists($this->filename)){
                $jsonTD = file_get_contents($this->filename);
                $arrD = ($jsonTD) ? json_decode($jsonTD, true) : array();

                foreach($arrD as $cont){
                    $car = new Car();
                    $car->__fromJson($cont["idCar"],$cont["name"],$cont["active"]);
                    array_push($this->carList,$car);
                }
            }
        }
    }
?>