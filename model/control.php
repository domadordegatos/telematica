<?php
    class control{

        function temp_002(){
            require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_002']);

        $sql1="	SELECT id_th_f_002,lugar,permiso,fecha,estado FROM th_f_002 where estado != 1 ORDER BY fecha desc"; $result1=mysqli_query($conexion,$sql1);
                if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
                  echo 2;//no hay registros
                }else{
                  while ($ver1=mysqli_fetch_row($result1)){
                  $tabla=$ver1[0]."||".
                         $ver1[1]."||".
                         $ver1[2]."||".
                         $ver1[3]."||".
                         $ver1[4]."||";
                     $_SESSION['temp_002'][]=$tabla;
                   }
                   echo 1;
                }
        }
        function temp_002_d(){
          require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
          $sql="SELECT estado FROM th_f_002 WHERE id_th_f_002 = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

          if($ver[0] == 2){
            $sql2="UPDATE th_f_002 SET estado = '0' WHERE id_th_f_002 = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
            if($ejecutar2){echo 1; }else{ echo 2; }
          }else{
            $sql2="UPDATE th_f_002 SET estado = '2' WHERE id_th_f_002 = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
            if($ejecutar2){echo 1; }else{ echo 2; }
          }
        }

        function temp_065(){
          require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_065']);

      $sql1="SELECT id_065_principal,lugar,acudiente,descripcion,estado FROM sgi_f_065 where estado != 1 ORDER BY id_065_principal desc"; $result1=mysqli_query($conexion,$sql1);
              if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
                echo 2;//no hay registros
              }else{
                while ($ver1=mysqli_fetch_row($result1)){
                $tabla=$ver1[0]."||".
                       $ver1[1]."||".
                       $ver1[2]."||".
                       $ver1[3]."||".
                       $ver1[4]."||";
                   $_SESSION['temp_065'][]=$tabla;
                 }
                 echo 1;
              }
      }
      function temp_065_d(){
        require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
        $sql="SELECT estado FROM sgi_f_065 WHERE id_065_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

        if($ver[0] == 2){
          $sql2="UPDATE sgi_f_065 SET estado = '0' WHERE id_065_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
          if($ejecutar2){echo 1; }else{ echo 2; }
        }else{
          $sql2="UPDATE sgi_f_065 SET estado = '2' WHERE id_065_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
          if($ejecutar2){echo 1; }else{ echo 2; }
        }
      }
      function temp_037(){
        require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_037']);

    $sql1="SELECT id_037_principal,fecha,lugar,numero,estado FROM sgi_f_037 where estado != 1 ORDER BY fecha desc"; $result1=mysqli_query($conexion,$sql1);
            if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
              echo 2;//no hay registros
            }else{
              while ($ver1=mysqli_fetch_row($result1)){
              $tabla=$ver1[0]."||".
                     $ver1[1]."||".
                     $ver1[2]."||".
                     $ver1[3]."||".
                     $ver1[4]."||";
                 $_SESSION['temp_037'][]=$tabla;
               }
               echo 1;
            }
    }
    function temp_037_d(){
      require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
      $sql="SELECT estado FROM sgi_f_037 WHERE id_037_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

      if($ver[0] == 2){
        $sql2="UPDATE sgi_f_037 SET estado = '0' WHERE id_037_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
        if($ejecutar2){echo 1; }else{ echo 2; }
      }else{
        $sql2="UPDATE sgi_f_037 SET estado = '2' WHERE id_037_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
        if($ejecutar2){echo 1; }else{ echo 2; }
      }
    }

    function temp_030(){
      require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_030']);

  $sql1="SELECT id_030_principal,fecha,actividad,hallazgos,estado FROM sgi_f_030 where estado != 1 ORDER BY id_030_principal desc"; $result1=mysqli_query($conexion,$sql1);
          if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
            echo 2;//no hay registros
          }else{
            while ($ver1=mysqli_fetch_row($result1)){
            $tabla=$ver1[0]."||".
                   $ver1[1]."||".
                   $ver1[2]."||".
                   $ver1[3]."||".
                   $ver1[4]."||";
               $_SESSION['temp_030'][]=$tabla;
             }
             echo 1;
          }
  }
  function temp_030_d(){
    require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
    $sql="SELECT estado FROM sgi_f_030 WHERE id_030_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

    if($ver[0] == 2){
      $sql2="UPDATE sgi_f_030 SET estado = '0' WHERE id_030_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
      if($ejecutar2){echo 1; }else{ echo 2; }
    }else{
      $sql2="UPDATE sgi_f_030 SET estado = '2' WHERE id_030_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
      if($ejecutar2){echo 1; }else{ echo 2; }
    }
  }

  function temp_059(){
    require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_059']);

$sql1="SELECT id_059_principal,numero_permiso,descripcion,ubicacion,estado FROM sgi_f_059 where estado != 1 ORDER BY id_059_principal desc"; $result1=mysqli_query($conexion,$sql1);
        if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
          echo 2;//no hay registros
        }else{
          while ($ver1=mysqli_fetch_row($result1)){
          $tabla=$ver1[0]."||".
                 $ver1[1]."||".
                 $ver1[2]."||".
                 $ver1[3]."||".
                 $ver1[4]."||";
             $_SESSION['temp_059'][]=$tabla;
           }
           echo 1;
        }
}
function temp_059_d(){
  require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
  $sql="SELECT estado FROM sgi_f_059 WHERE id_059_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

  if($ver[0] == 2){
    $sql2="UPDATE sgi_f_059 SET estado = '0' WHERE id_059_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
    if($ejecutar2){echo 1; }else{ echo 2; }
  }else{
    $sql2="UPDATE sgi_f_059 SET estado = '2' WHERE id_059_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
    if($ejecutar2){echo 1; }else{ echo 2; }
  }
}

function temp_058(){
    require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_058']);

$sql1="SELECT id_058_principal,actividad,fecha,hora_actual,estado FROM sgi_f_058 where estado != 1 ORDER BY id_058_principal desc"; $result1=mysqli_query($conexion,$sql1);
        if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
          echo 2;//no hay registros
        }else{
          while ($ver1=mysqli_fetch_row($result1)){
          $tabla=$ver1[0]."||".
                 $ver1[1]."||".
                 $ver1[2]."||".
                 $ver1[3]."||".
                 $ver1[4]."||";
             $_SESSION['temp_058'][]=$tabla;
           }
           echo 1;
        }
}
function temp_058_d(){
  require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
  $sql="SELECT estado FROM sgi_f_058 WHERE id_058_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

  if($ver[0] == 2){
    $sql2="UPDATE sgi_f_058 SET estado = '0' WHERE id_058_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
    if($ejecutar2){echo 1; }else{ echo 2; }
  }else{
    $sql2="UPDATE sgi_f_058 SET estado = '2' WHERE id_058_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
    if($ejecutar2){echo 1; }else{ echo 2; }
  }
}

function temp_029(){
  require_once "conexion.php"; $conexion=conexion(); unset($_SESSION['temp_029']);

$sql1="SELECT id_029_principal,actividad,fecha,observaciones,estado FROM sgi_f_029 where estado != 1 ORDER BY id_029_principal desc"; $result1=mysqli_query($conexion,$sql1);
      if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
        echo 2;//no hay registros
      }else{
        while ($ver1=mysqli_fetch_row($result1)){
        $tabla=$ver1[0]."||".
               $ver1[1]."||".
               $ver1[2]."||".
               $ver1[3]."||".
               $ver1[4]."||";
           $_SESSION['temp_029'][]=$tabla;
         }
         echo 1;
      }
}
function temp_029_d(){
require_once "conexion.php"; $conexion=conexion(); $id=$_POST['form1'];
$sql="SELECT estado FROM sgi_f_029 WHERE id_029_principal = '$id'"; $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);

if($ver[0] == 2){
  $sql2="UPDATE sgi_f_029 SET estado = '0' WHERE id_029_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
  if($ejecutar2){echo 1; }else{ echo 2; }
}else{
  $sql2="UPDATE sgi_f_029 SET estado = '2' WHERE id_029_principal = '$id'"; $ejecutar2=mysqli_query($conexion, $sql2);
  if($ejecutar2){echo 1; }else{ echo 2; }
}
}









    }

?>