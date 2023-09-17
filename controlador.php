<?php
    require_once("modelo.php");
    $services = new Service();
    $datos = $services->getServicios();
    require_once("vista.php");
?>