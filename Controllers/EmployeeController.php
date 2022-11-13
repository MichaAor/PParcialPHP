<?php
namespace Controllers;

use \DAO\EmployeeDAO as EmployeeDAO;
use \Model\Employee as Employee;
use \Model\Car as Car;

    class EmployeeController{
        private $empDAO;

        public function __construct(){
            $this->empDAO = new EmployeeDAO();
        }

        public function Add($firstName,$lastName,$email,$dni,$idCar){
            $car = new Car();
                $car->setId($idCar);
            $emp = new Employee();
            $emp->__toRequest($firstName,$lastName,$email,$dni,$car);
            /*
            echo "<pre>";
            print_r($emp);
            echo "<pre>";
            */
            
        }

    }
?>