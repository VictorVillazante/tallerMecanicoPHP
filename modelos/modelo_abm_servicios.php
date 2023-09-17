<?php
    class Modelo_abm_servicios{
        private $db;
    
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=taller', "root", "");
        }
    
        
        public function getServicios() {
            $sql = "SELECT * FROM servicios";
            $respuesta=$this->db->query($sql);
            $filas=$respuesta->fetchAll();
            $servicio;
            $contador=0;
            foreach ($filas as $res) {
                $servicio[$contador] = $res;
                $contador++;
            }
            return $servicio;
        }
        
        public function crear_servicio($nombre, $precio,$tipo,$activo) {    
            $sql = "INSERT INTO servicios(nombre, precio,tipo_servicio_idtipo_servicio,activo) VALUES ('" . $nombre . "',$precio,$tipo,$activo)";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        public function eliminar($id){
            $sql = "UPDATE servicios set activo=0 where idservicios=$id";
            $this->db->query($sql);
        }
        public function buscarTipos(){
            $sql = "SELECT * FROM tipo_servicio";
            $respuesta=$this->db->query($sql);
            $filas=$respuesta->fetchAll();
            $servicio;
            $contador=0;
            foreach ($filas as $res) {
                $servicio[$contador] = $res['nombre'];
                $contador++;
            }
            return $servicio;
        }
        public function modificar_servicio($id,$nombre,$precio,$tipo,$activo){
            //echo "UPDATE servicios set activo=$activo,nombre='$nombre',precio=$precio,tipo_servicio_idtipo_servicio=(select idtipo_servicio from tipo_servicio where nombre='$tipo') where idservicios=$id";
            //UPDATE servicios set activo=1,nombre='Cambio de llantas',precio=200,tipo_servicio_idtipo_servicio=(select idtipo_servicio from tipo_servicio where nombre='llantas') where idservicios=1

            $sql = "UPDATE servicios set activo=$activo,nombre='$nombre',precio=$precio,tipo_servicio_idtipo_servicio=(select idtipo_servicio from tipo_servicio where nombre='$tipo') where idservicios=$id";
            $this->db->query($sql);
        }
    }

?>