<?php
require_once "../../model/conexion.php";
require_once "../../model/login.php";
$conexion=conexion();

    $obj= new login();

    echo json_encode($obj->ob_datos_usuario())
 ?>