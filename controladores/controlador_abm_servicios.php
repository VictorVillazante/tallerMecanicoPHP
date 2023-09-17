<?php
    require_once('../modelos/modelo_abm_servicios.php');
    $abm=new Modelo_abm_servicios();
    $servicios=$abm->getServicios();
    require_once('../vistas/vista_abm_servicios.php');
?>