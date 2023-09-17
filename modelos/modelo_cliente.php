<?php
    class Modelo_cliente{
        private $nombres,$apellidos,$correo,$telefono,$direccion,$db,$usuario,$contraseña;
        function __construct($nombres,$apellidos,$correo,$telefono,$direccion,$usuario,$contraseña){ 
            $this->nombres=$nombres;
            $this->apellidos=$apellidos;
            $this->correo=$correo;
            $this->telefono=$telefono;
            $this->direccion=$direccion;
            $this->usuario=$usuario;
            $this->contraseña=$contraseña;
            $this->db=new PDO('mysql:host=localhost;dbname=taller','root','');
        }
        public function crearCliente(){
            $query="INSERT INTO cliente value(null,'$this->nombres','$this->apellidos','$this->correo',$this->telefono,'$this->direccion','$this->usuario','$this->contraseña')";
            $this->db->query($query);
            return true;
        }
        public static function verificar_existencia($usuario,$contraseña){
            $query="SELECT * FROM cliente where usuario='$usuario' and contraseña='$contraseña'";
            $db=new PDO('mysql:host=localhost;dbname=taller','root','');
            $resultado=$db->query($query);
            $fila=$resultado->fetch();
            if($fila==null){
                return false;
            }else{
                return true;
            }

        }
        public static function obtener_clientes(){
            $conexion=new PDO('mysql:host=localhost;dbname=taller','root','');
            $resultado=$conexion->query("SELECT * from cliente");
            $filas=$resultado->fetchAll();
            return $filas;  
        }
    }
?>