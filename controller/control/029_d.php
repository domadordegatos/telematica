<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/control.php";
$conexion=conexion();

$obj= new control();

  $result=$obj->temp_029_d();
  echo $result;

 ?>
