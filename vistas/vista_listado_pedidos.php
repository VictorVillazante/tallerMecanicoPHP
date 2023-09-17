<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <h1>Taller Mecánico "La Zapatitos"</h1>
            <h1>Servicios</h1>
        </header>
        <nav class="navegador_adm">
            <ul class="navegador_adm">
                <li id="servicios" class="navegador_adm">
                    <a href="#" class="navegador_adm">Servicios</a>
                    <ul id="servicios" class="navegador_adm">
                        <li><a class="navegador_adm" href="controlador_abm_servicios.php">Listado</a></li>
                        <li><a class="navegador_adm" href="controlador_crear_servicios.php">Crear</a></li>
                        <li><a class="navegador_adm" href="controlador_modificar_servicios.php">Modificar</a></li>
                        <li><a class="navegador_adm" href="controlador_eliminar_servicios.php">Eliminar</a></li>
                    </ul>
                </li>
                <li class="navegador_adm">
                    <a class="navegador_adm" href="controlador_listado_pedidos.php">Listado de pedidos</a>
                </li>
                <li class="navegador_adm">
                    <a class="navegador_adm" href="controlador_listado_clientes.php">Listado de clientes</a>
                </li>
                <li class="navegador_adm">
                    <a class="navegador_adm" href="../index.php">Salir</a>
                </li>
            </ul>
        </nav>
        <div id="listado_servicios">
            <table>
                <tr>
                    <th>ID pedido</th>
                    <th>fecha</th>
                    <th>id servicio</th>
                    <th>id cliente</th>
                </tr>
                <?php
                    foreach($pedidos as $pedido){
                        echo "<tr>
                            <td>".$pedido[0]."</td>
                            <td>".$pedido[1]."</td>
                            <td>".$pedido[2]."</td>
                            <td>".$pedido[3]."</td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>