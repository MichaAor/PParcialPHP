<?php
namespace Controllers;

use \DAO\CarDAO as CarDAO;
use \Model\User as User;

    class HomeController{
        private $carDAO;

        public function __construct(){
            $this->carDAO = new CarDAO();
        }

        public function Index($message = ""){
            require_once(VIEWS_PATH."Home.php");
        }

        public function Login($email, $password){
            $user = new User();
            $user->__fromRequest($email, $password);    
            if((strcmp($email,"admin@utn.com")==0) && strcmp($password,"123456")==0){
                $this->ViewEmployeePanel("Login exitoso");
            }else{
            $this->Index("Credenciales invalidas");
            }
        }

        public function ViewEmployeePanel($message=""){
            $carList = $this->carDAO->GetAll();
            require_once(VIEWS_PATH."EmployeePanel.php");
        }


        public function LogOut(){
            session_destroy();
            $this->Index("Se ha desloguedo correctamente");
        }
    }
?>