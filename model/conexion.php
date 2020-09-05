

<?php
	function conexion(){
		return $conexion=mysqli_connect("localhost","root","","telematica");
		mysqli_set_charset($conexion,"utf8");
	}
 ?>
