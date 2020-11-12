<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../menus/index.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <?php require_once "../libraries/lib.php";
    
    $sql="SELECT usuarios.id_user, usuarios.`names`, usuarios.lastnames, usuarios.cedula, login_users.estado, usuarios.firma FROM usuarios
    JOIN login_users ON login_users.id_user = usuarios.credenciales";
    $result=mysqli_query($conexion,$sql);
    ?>
</head>
<body>
<?php if($ver[0] == 1){ ?>
    <div class="container mt-3">
        <H2>Activacion y desactivacion de formatos</H2>
        <div class="contenedor2">
            <a class="btn btn-info" onclick="f_002()">TH_F_002</a>
            <a class="btn btn-info" onclick="f_065()">SGI_F_065</a>
            <a class="btn btn-info" onclick="f_037()">SGI_F_037</a>
            <a class="btn btn-info" onclick="f_030()">SGI_F_030</a>
            <a class="btn btn-info" onclick="f_059()">SGI_F_059</a>
            <a class="btn btn-info" onclick="f_058()">SGI_F_058</a>
            <a class="btn btn-info" onclick="f_029()">SGI_F_029</a>
        </div>

        <div class="tabla" id="tabla"></div>
    </div>
<?php } ?>
</body>
</html>

<script>
    function f_002(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/002.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/002.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/002.php");
                    } } }); }

    function desactivar_002(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/002_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_002();
                      $('#tabla').load("temp_control/002.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }
    
     function f_065(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/065.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/065.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/065.php");
                    } } }); }

    function desactivar_065(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/065_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_065();
                      $('#tabla').load("temp_control/065.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }

    function f_037(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/037.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/037.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/037.php");
                    } } }); }

    function desactivar_037(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/037_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_037();
                      $('#tabla').load("temp_control/037.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }

    function f_030(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/030.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/030.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/030.php");
                    } } }); }

    function desactivar_030(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/030_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_030();
                      $('#tabla').load("temp_control/030.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }

   function f_059(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/059.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/059.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/059.php");
                    } } }); }

    function desactivar_059(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/059_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_059();
                      $('#tabla').load("temp_control/059.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }

    function f_058(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/058.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/058.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/058.php");
                    } } }); }

    function desactivar_058(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/058_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_058();
                      $('#tabla').load("temp_control/058.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }

    function f_029(){
        $.ajax({
                  type:"POST",
                  url:"../../controller/control/029.php",
                  success:function(r){
                    if(r==1){
                      $('#tabla').load("temp_control/029.php");
                    }else if(r==2){
                      $('#tabla').load("temp_control/029.php");
                    } } }); }

    function desactivar_029(id){
        cadena="form1=" + id;
                  $.ajax({
                  type:"POST",
                  url:"../../controller/control/029_d.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                        f_029();
                      $('#tabla').load("temp_control/029.php");
                    }else if(r==2){
                      alertify.error("Error en bd");
                      return false;
                    } } }); }
</script>