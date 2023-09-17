<?php
    require_once('../modelos/modelo_cliente.php');
    $acierto=false;
    if(isset($_POST) && $_POST!=null){
        $cliente=new Modelo_cliente($_POST['nombres'],$_POST['apellidos'],$_POST['correo'],$_POST['telefono'],$_POST['direccion'],$_POST['usuario'],$_POST['contraseña']);
        $acierto=$cliente->crearCliente();
        echo "<div class='respuesta'>Cliente registrado exitosamente</div>";        
    }else{
        echo "<div class='respuesta'>Ingrese todos los campos</div>";        
    }
    require_once('../vistas/vista_cliente.php');
?>