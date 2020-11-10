<?php
session_start();
require_once "../../../model/conexion.php";
require_once "../../../model/procesos_agregarme.php";
$conexion=conexion();

$obj= new agregarme();

  $result=$obj->validacion_rescatista();
  echo $result;

 ?>