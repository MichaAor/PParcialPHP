<?php
namespace Controllers;

use \DAO\EmployeeDAO as EmployeeDAO;
use \Controllers\HomeController as HomeController;
use \Model\Employee as Employee;
use \Model\Car as Car;

    class EmployeeController{
        private $empDAO;
        private $homeC;

        public function __construct(){
            $this->empDAO = new EmployeeDAO();
            $this->homeC = new HomeController();
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
            $this->empDAO->Add($emp);
            $this->homeC->ViewEmployeePanel("Se ha guardado exitosamente su empleado");
        }
    }
?>