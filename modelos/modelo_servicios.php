<?php
    class Servicios{
        private $db;
        function __construct(){
            $this->db=new PDO('mysql:host=localhost;dbname=taller','root','');
        }
        public function buscarServicios($tipo){
            $resultado=$this->db->query("SELECT nombre from servicios where `tipo_servicio_idtipo_servicio`=$tipo and activo=1");
            $filas=$resultado->fetchAll();
            return $filas;  
        }
    }
?>