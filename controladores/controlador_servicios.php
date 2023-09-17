<?php
    require_once('../modelos/modelo_servicios.php');
    class Controlador_servicios{
        public static function buscarServicios($idtipo){
            $mdl_servicios=new Servicios();
            return $mdl_servicios->buscarServicios($idtipo);
        }
    }
?>