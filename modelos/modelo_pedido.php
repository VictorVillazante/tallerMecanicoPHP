<?php
    class Modelo_pedido{
        public static function verifica_ocupado($fechaInicio,$fechaFin){
            $conexion=new PDO('mysql:host=localhost;dbname=taller','root','');
            $resultado=$conexion->query("SELECT * FROM pedido where fecha>='$fechaInicio' and fecha<='$fechaFin'");
            $fila=$resultado->fetchAll();
            if($fila==null){
                return false;
            }else{
                return true;
            }
        }
        public static function registrar_pedido($fecha,$usuario,$servicio){
            $conexion=new PDO('mysql:host=localhost;dbname=taller','root','');
            $query="INSERT into pedido VALUE( null, '$fecha', (select idcliente from cliente where usuario='$usuario'), (select idservicios from servicios where nombre='$servicio'))";
            $conexion->query($query);
        }
        public static function getPedidos(){
            $conexion=new PDO('mysql:host=localhost;dbname=taller','root','');
            $resultado=$conexion->query("SELECT * from pedido");
            $filas=$resultado->fetchAll();
            return $filas;  
        }
           
        
    }
?>