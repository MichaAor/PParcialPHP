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

        public function Get($dni){
            $this->GetD();
            $emps = array_filter($this->empList,function($emp) use ($dni){
                    return $emp->getDni() == $dni;
            });

            $emps = array_values($emps);
        return (count($emps) >0) ? $emps[0] : NULL;   
        
        /*
        foreach($this->empList as $emp){
                if(strcmp($emp->getDni(),$dni) ==0){
                    return $empA;
                }
            }
            return NULL;
        */
        }

        public function Add(Employee $emp){
            $this->GetD();
            $emp->setId($this->LastId());
            array_push($this->empList,$emp);
        $this->SaveD();
        }

        public function Update(){

        }

        public function Delete($dni){
            $this->GetD();
            $this->empList = array_filter($this->empList,function($emp) use ($dni){
                return $emp!=$dni;
            });
           $this->SaveD();
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
            $arrTE = array();

            foreach($this->empList as $emp){
                    $valuesArr = array();
                    $valuesArr["idClient"] = $emp->getId();
                    $valuesArr["firstName"] = $emp->getFirstName();
                    $valuesArr["lastName"] = $emp->getLastName();
                    $valuesArr["email"] = $emp->getEmail() ;
                    $valuesArr["dni"] = $emp->getDni();
                    $valuesArr["idCar"] = $emp->getCar()->getId();
                array_push($arrTE, $valuesArr);
            }

            $fileChager= json_encode($valuesArr,JSON_PRETTY_PRINT);
            file_put_contents($this->filename,$fileChager);
        }

        private function LastId(){
            $id = 0;

            foreach($this->empList as $emp){
                $id = ($emp->getId() >$id) ? $emp->getId() : $id;
            }
            return $id;
        }
    }
?>