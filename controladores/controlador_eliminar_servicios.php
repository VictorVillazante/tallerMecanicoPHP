<?php
    require_once('../modelos/modelo_abm_servicios.php');
    $abm=new Modelo_abm_servicios();
    $acierto=false;
    if(isset($_POST['id'])  && $_POST['id']!='' ){
        $abm->eliminar($_POST['id']);
        $acierto=true;
    }
    require_once('../vistas/vista_eliminar_servicio.php');

?>