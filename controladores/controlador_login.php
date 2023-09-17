<?php
    //echo "login";
    require_once('../modelos/modelo_login.php');
    $acierto=false;
    if(isset($_POST['usuario'])!=null&&isset($_POST['contraseña'])!=null){
        $usuario=new Modelo_login($_POST['usuario'],$_POST['contraseña']);
        $acierto=$usuario->verificarExistencia();
        if($acierto){
            header('Location:controlador_abm_servicios.php');
        }
    }
    require_once('../vistas/vista_login.php');   
?>