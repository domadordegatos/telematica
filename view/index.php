<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telematica-f_002</title>
    <?php 
          require_once "./libraries/lib.php";
          require_once "../model/conexion.php"; 
          require_once "../model/th_f_002.php"; 
          
          $conexion=conexion();
    ?>
</head>
<body>
    <div class="container mt-5">
        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos TH_F_002</label>
          <select class="form-control col-sm-6" name="" id="formato_id">
            <option value="A">Opciones...</option>
            <option value="A">Agregar un formato</option>
            <?php $sql="SELECT th_f_002.id_th_f_002,
					                     th_f_002.permiso,
                               asuntos_thf_002.description,
                               th_f_002.fecha,
                               th_f_002.lugar
                               FROM th_f_002
                               JOIN asuntos_thf_002 ON asuntos_thf_002.id_asunto = th_f_002.asunto
                               WHERE estado = '1' order by asuntos_thf_002.description asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver[0]; ?>><?php echo $ver[2]."---#".$ver[1]."---(".$ver[4].")---(".$ver[3].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>


        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_030</label>
          <select class="form-control col-sm-6" name="" id="formato_id_030">
            <option value="A">Opciones...</option>
            <option value="A">Agregar un formato</option>
            <?php $sql="SELECT id_030_principal,
					              actividad,
					              fecha,
					              fecha_cierre FROM sgi_f_030 order by actividad asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[0]; ?>><?php echo $ver1[1]."---(".$ver1[2].")---(".$ver1[3].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>
    </div>
    
</body>
</html>