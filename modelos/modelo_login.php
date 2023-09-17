<?php
    class Modelo_login{
        private $usuario,$contraseña;
        private $db;
        public function __construct($usuario,$contraseña){
            $this->usuario=$usuario;
            $this->contraseña=$contraseña;
            $this->db=new PDO('mysql:host=localhost;dbname=taller','root','');
        }
        public function verificarExistencia(){
            $query="SELECT * FROM mecanico";
            $resultado=$this->db->query($query);
            $acierto=false;
            foreach($resultado as $fila){
                if($fila['usuario']==$this->usuario && $fila['contraseña']==$this->contraseña){
                    $acierto=true;
                }
            }
            return $acierto;
        }
    }

?>