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
        <header class="text-center">
            <div class="enlace_cabecera"><a href="controladores/controlador_login.php">Ingresar al sistema</a></div>
            <h1>Taller Mecánico "La Zapatitos"</h1>
            <p class="lead">Ingrese el nuevo servicio realizado en el taller</p>
        </header>
        <nav class="navegador_usuarios">
            <a class="navegador_usuarios" href="../controlador_index.php">Inicio</a>
            <a class="navegador_usuarios" href="../controladores/controlador_cliente.php">Registro cliente</a>
            <a class="navegador_usuarios" href="../controladores/controlador_contactos.php">Contactos</a>
        </nav>
        <div class="formulario">
            <form class="formulario" action="#" method="post">
                <div class="formulario_input">
                    <h2 class="formulario">Nombres:</h2>
                    <input class="formulario" type="text" name="nombres">
                </div>
                <div class="formulario_input">
                    <h2 class="formulario">Apellidos:</h2>
                    <input class="formulario" type="text" name="apellidos">                </div>
                <div class="formulario_input">
                    <h2 class="formulario">Usuario:</h2>
                    <input class="formulario" type="text" name="usuario">
                </div>
                <div class="formulario_input">
                    <h2 class="formulario">Contraseña:</h2>
                    <input class="formulario" type="password" name="contraseña">
                </div>
                <div class="formulario_input">
                <h2 class="formulario">Correo:</h2>
                <input class="formulario" type="email" name="correo">
                </div>
                <div class="formulario_input">
                    <h2 class="formulario">Telefono:</h2>
                    <input class="formulario" type="number" name="telefono">
                </div>
                <div class="formulario_input">
                    <h2 class="formulario">Direccion:</h2>
                    <input class="formulario" type="text" name="direccion">
                </div>
                <input class="boton_formulario" type="submit" value="Registrar">
            </form>
        </div> 
        <footer class="col-lg-12 text-center">
            Tecnología Web - <?php echo date("Y"); ?>
        </footer>
    </div>
</body>
</html>