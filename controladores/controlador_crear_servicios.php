<?php
    require_once('../modelos/modelo_abm_servicios.php');
    $abm=new Modelo_abm_servicios();
    $tipo_prod=$abm->buscarTipos();
    $acierto=false;
    if(isset($_POST['nombre']) && isset($_POST['precio']) && $_POST['nombre']!='' && $_POST['precio']!=''  && isset($_POST['tipo']) && $_POST['tipo']!='' && isset($_POST['activo']) && $_POST['activo']!=''){
        $abm->crear_servicio($_POST['nombre'],$_POST['precio'],array_search($_POST['tipo'], $tipo_prod)+1,(($_POST['activo']=='Habilitado')?1:0));
        $acierto=true;
    }else{
        echo "Coloque todos los datos";
    }
    require_once('../vistas/vista_abm_crear.php');
?>