<?php
namespace DAO;
use \DAO\CarDAO as CarDAO;
use \Model\Employee as Employee;

    class EmployeeDAO{
        private $empList = array();
        private $filename = "Data/Employee.json";

        private $carDAO;

        public function __construct(){
            $this->carDAO = new CarDAO();
        }

        public function GetAll(){
           $this->GetD();
        return $this->empList;   
        }

        public function Get(){

        }

        public function Add(){

        }

        public function Update(){

        }

        public function Delete(){

        }

        private function GetD(){
            $this->empList = array();
            if(file_exists($this->filename)){
                $jsonTD = file_get_contents($this->filename);
                $arrD = ($jsonTD) ? json_decode($jsonTD, true): array();

                foreach($arrD as $cont){
                    $emp = new Employee();
                    $emp->__toJson($cont["idClient"], $cont["firstName"]
                                  ,$cont["lastName"], $cont["email"], $cont["dni"]
                                  ,$this->carDAO->Get($cont["idCar"]));
                array_push($this->empList,$emp);
                }
            }
        }

        private function SaveD(){
            
        }
    }
?>