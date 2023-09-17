<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '')) {

    include "modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['nombre'], $_POST['precio']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="contenedor">
            <header class="text-center">
                <h1>Taller Mecánico "La Zapatitos"</h1>
                <hr/>
                <p class="lead">Ingrese el nuevo servicio realizado en el taller</p>
            </header>
            <div class="formulario">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nuevo servicio</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control"/>    
                        Precio: <input type="text" name="precio" class="form-control"/>    
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de servicios</h3>
                    <a href="controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de servicios</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                Tecnología WEB - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>