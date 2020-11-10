<?php
session_start();
require_once "../../model/conexion.php";
require_once "../../model/sgi_f_059_model.php";
$conexion=conexion();

$obj= new sgi_f_059_controller();

  $result=$obj->agregar_formato();
  echo $result;

 ?>