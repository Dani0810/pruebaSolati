<?php
    include_once('../models/Estudiantes.php');
    class ControladorEstudiante{
        private $Estududiante;
        // constructor que tiene como valor la instancia de la clase estudiante
        public function __construct(){
            $this->Estudiante = new Estudiante();
        }
        //metodo controlador para listar 
        public function index(){
            // por medio de la instancia de estudiante se llama al metodo listar
            $resultado = $this->Estudiante->listar();
            return $resultado;
        }
        // metodo controlador para crear un nuevo estudiante
        public function crear($NumDocApr, $typeDocApr, $name, $lastName1, $lastName2, $yearsOld, $emailInst, $emailPer, $phone, $adress, $genus){
            $this->Estudiante->set("NumDocApr", $NumDocApr); 
            $this->Estudiante->set("typeDoc", $typeDocApr); 
            $this->Estudiante->set("name", $name); 
            $this->Estudiante->set("lastName1", $lastName1); 
            $this->Estudiante->set("lastName2", $lastName2); 
            $this->Estudiante->set("yearsOld", $yearsOld); 
            $this->Estudiante->set("emailIns", $emailInst); 
            $this->Estudiante->set("emailPer", $emailPer); 
            // $this->Estudiante->set("fechaRegis", $date); 
            $this->Estudiante->set("phone", $phone); 
            $this->Estudiante->set("adress", $adress); 
            $this->Estudiante->set("genus", $genus); 
        
            $resultado = $this->Estudiante->crear();
            return $resultado;
        }
        //metodo controlador para eliminar un registro
        public function eliminar($Id){
            // por medio de la instancia de estudiante se llama al metodo eliminar
            //tambien se toma el id de el estudiante a eliminar
            $this->Estudiante->set("Id", $Id);
            $this->Estudiante->eliminar($Id);
        }
        //metodo controlador para ver los datos
        public function ver($Id){    
            // por medio de la instancia de estudiante se llama al metodo ver

            $this->Estudiante->set("Id", $Id);
            return $this->Estudiante->ver();
        }
        //metodo controlador para editar un registro
        public function editar($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address){
            // var_dump($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);
            $this->Estudiante->setId($Id);
            $this->Estudiante->set("name", $name);
            $this->Estudiante->set("lastName1", $lastName1);
            $this->Estudiante->set("lastName2", $lastName2);
            $this->Estudiante->set("yearsOld", $yearsOld);
            $this->Estudiante->set("emailIns", $emailIns);
            $this->Estudiante->set("emailPer", $emailPer);
            $this->Estudiante->set("phone", $phoneNumber);
            $this->Estudiante->set("adress", $address);
            $this->Estudiante->set("genus", $genus);
            // por medio de la instancia de estudiante se llama al metodo actualizar

            $resultado = $this->Estudiante->actualizar($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);
            return $resultado;
        }
        
        
        // metodo controlador para la consulta por medio de el numero de ficha
        public function consultaFicha($fichaId){
            // por medio de la instancia de estudiante se llama al metodo consultaFicha
            $this->Estudiante->consultaFicha($fichaId);
        }
    }




?>