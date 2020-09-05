<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/sgi_f_030_model.php";
$conexion=conexion();

$obj= new sgi_f_030_controller();

  $result=$obj->agregar_formato();
  echo $result;

 ?>