<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="contenedor">
            <header class="text-center">
                <div class="enlace_cabecera"><a href="controladores/controlador_login.php">Ingresar al sistema</a></div>
                <h1>Taller Mecánico "La Zapatitos"</h1>
                <p class="lead">Ingrese el nuevo servicio realizado en el taller</p>
            </header>
            <nav class="navegador_usuarios">
                <a class="navegador_usuarios" href="controlador_index.php">Inicio</a>
                <a class="navegador_usuarios" href="controladores/controlador_cliente.php">Registro cliente</a>
                <a class="navegador_usuarios" href="controladores/controlador_contactos.php">Contactos</a>
            </nav>
            <div class="servicios">
                <div class="servicio">
                    <img src="img/llantas.png" alt="">
                    <div class="tipo_descripcion"><a href="controladores/controlador_pedido.php?id=1">Servicios para llantas</a></div>
                </div>
                <div class="servicio">
                    <img src="img/mantenimiento.jpg" alt="">
                    <div class="tipo_descripcion"><a href="controladores/controlador_pedido.php?id=2">Servicios para el mantenimiento</a></div>
                </div>
                <div class="servicio">
                    <img src="img/motores.jpg" alt="">
                    <div class="tipo_descripcion"><a href="controladores/controlador_pedido.php?id=4">Servicios para motores</a></div>
                </div>
                <div class="servicio">
                    <img src="img/chapeado_pintado.jpg" alt="">3
                    <div class="tipo_descripcion"><a href="controladores/controlador_pedido.php?id=3">Servicios de chapeado</a></div>
                </div>
            </div>
            <footer class="col-lg-12 text-center">
                Tecnología WEB - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>