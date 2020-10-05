<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/sgi_f_037_model.php";
$conexion=conexion();

$obj= new sgi_f_037_controller();

  $result=$obj->agregar_formato();
  echo $result;

 ?>