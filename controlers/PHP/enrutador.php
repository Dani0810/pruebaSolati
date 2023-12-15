<?php
    class Enrutador{
        public function cargarModulo($vista){
            switch($vista):
            case "crear":
                include_once('../../public/index.php');
                break;
            case "editar":
                include_once('../../views/editar.php');
                break;
            default:
                include_once("vistas/error.php");

            endswitch;
        }

        public function validarGet($variable){
            if(empty($variable)){
                include_once('../../public/index.php');
            }else{
                return true;
            }
        }
    }

?>