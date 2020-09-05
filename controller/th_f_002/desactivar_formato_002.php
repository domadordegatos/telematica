<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/th_f_002_model.php";
$conexion=conexion();

$obj= new th_f_002_controller();

  $result=$obj->desactivar_formato_002();
  echo $result;

 ?>
