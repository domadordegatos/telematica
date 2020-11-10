<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          require_once "../../libraries/lib.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $value = $id_del_formato_recuperado;

            $consulta="SELECT th_f_002.id_th_f_002,
                            th_f_002.asunto,
                            th_f_002.lugar,
                            th_f_002.permiso,
                            th_f_002.contenido,
                            th_f_002.fecha,
                            th_f_002.hora_i,
                            th_f_002.hora_f,
                            usuarios.`names`,
                            usuarios.lastnames
                            FROM th_f_002
                            JOIN usuarios ON usuarios.id_user = th_f_002.instructor
                            WHERE th_f_002.id_th_f_002 = '$id_del_formato_recuperado '";
            $result=mysqli_query($conexion,$consulta);
            $datos_th_f_002=mysqli_fetch_assoc($result);

            date_default_timezone_set('America/Bogota');
            $fecha= date('Y-m-d'); 
            $time = time(); 
            $hora = date("H:i:s",$time);
    ?>

</head>
<body  onload="cargar_tabla_temporall()" onload="ocultar_segmento_3()">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-around mt-2">
                    
                    <button class="btn btn-info btn-sm mr-1" onclick="javascript:history.back(1)">
                    <svg class="mr-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
                    <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
                    <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
                    </svg>Regresar</button>
    
                    <h2>VISTA SGI_F_059</h2>
                    
                    <a href="../../../model/generador_pdf/059.php?id_formato=<?php echo $id_del_formato_recuperado ?>" class="btn btn-sm btn-warning" onclick="agregar_informe()">Descargar Informe
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z"/>
                            <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z"/>
                            <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                          </svg>
                    </a>  
        </div>
    </div>
</body>
</html>