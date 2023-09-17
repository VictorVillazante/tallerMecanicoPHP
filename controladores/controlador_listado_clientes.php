<?php
    require_once('../modelos/modelo_cliente.php');
    $clientes=Modelo_cliente::obtener_clientes();
    require_once('../vistas/vista_listado_cliente.php');
?>