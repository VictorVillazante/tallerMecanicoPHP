<?php
    require_once('../modelos/modelo_pedido.php');
    $pedidos=Modelo_pedido::getPedidos();
    require_once('../vistas/vista_listado_pedidos.php');
?>