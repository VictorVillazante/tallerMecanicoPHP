<?php
    require_once('controlador_servicios.php');
    $servicios=Controlador_servicios::buscarServicios($_GET['id']);
    require_once('../vistas/vista_pedido.php');
    require_once('../modelos/modelo_pedido.php');
    if(isset($_POST['fecha']) && isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['servicio']) && isset($_POST['hora']) && $_POST['fecha']!=null && $_POST['usuario']!=null && $_POST['contraseña']!=null && $_POST['servicio']!=null && $_POST['hora']!=null ){
        $fecha=$_POST['fecha']." ".$_POST['hora'];
        list($hora,$minuto)=explode(':',$_POST['hora']);
        $fechaFin=$_POST['fecha']." ".$hora.":".($minuto+25);
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $servicio=$_POST['servicio'];
        require_once('../modelos/modelo_cliente.php');
        if(Modelo_cliente::verificar_existencia($usuario,$contraseña)){
            if($_POST['fecha']>=date("Y")."-".date("m")."-".(date("d")-1) && $_POST['fecha']<=date("Y")."-".date("m")."-".(date("d")+6)){
                if(!Modelo_pedido::verifica_ocupado($fecha,$fechaFin) ){
                    Modelo_pedido::registrar_pedido($fecha,$usuario,$servicio);
                    echo  "<div class='respuesta'>Pedido registrado</div>";
                }else{
                    echo "<div class='respuesta'>Eliga otro horario ese ya esta ocupado</div>";
                }
            }else{
                echo "<div class='respuesta'>Lo sentimos la solicitud se puede hacer hasta una semana</div>";
            }
        }else{
            echo "<div class='respuesta'>El cliente no existe</div>";
        }
        
    }
?>