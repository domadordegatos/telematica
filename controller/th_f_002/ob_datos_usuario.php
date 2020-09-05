<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/th_f_002_model.php";
$conexion=conexion();

    $obj= new th_f_002_controller();

    echo json_encode($obj->obtener_datos_empleado($_POST['id_empleado']))
 ?>
