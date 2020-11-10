<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php";
          require_once "../../model/th_f_002.php";
          $conexion=conexion();
          ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telematica Addme</title>
    
</head>
<body>
    <style>
        body{
            background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("../media/photos/logo.png");
            background-size: contain; 
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
<div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 d-flex justify-content-center mb-3 text-primary"><h3>Agregarme en un reporte</h3></div>
        </div>
        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos TH_F_002</label>
          <select class="form-control col-sm-6" name="" id="formato_id">
            <option value="A">Opciones...</option>
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
            <?php $sql="SELECT id_030_principal,
					              actividad,
					              fecha,
					              fecha_cierre FROM sgi_f_030 where estado = '1' order by actividad asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[0]; ?>><?php echo $ver1[0]."-".$ver1[1]."---(".$ver1[2].")---(".$ver1[3].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <!-- <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_037</label>
          <select class="form-control col-sm-6" name="" id="formato_id_037">
            <option value="A">Opciones...</option>
            <?php $sql="SELECT id_037_principal,
					              lugar,
					              fecha FROM sgi_f_037 where estado = '1' order by lugar asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[0]; ?>><?php echo $ver1[0]."---(".$ver1[1].")---(".$ver1[2].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div> -->

        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_065</label>
          <select class="form-control col-sm-6" name="" id="formato_id_065">
            <option value="A">Opciones...</option>
            <?php $sql="SELECT id_065_principal,
					              lugar,
					              lider_1 FROM sgi_f_065 where estado = '1' order by id_065_principal desc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[0]; ?>><?php echo $ver1[0]."---(".$ver1[1].")---(".$ver1[2].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_059</label>
          <select class="form-control col-sm-6" name="" id="formato_id_059">
            <option value="A">Opciones...</option>
            <?php $sql="SELECT descripcion,
					              numero_permiso,
					              ubicacion, id_059_principal FROM sgi_f_059 where estado = '1' order by id_059_principal desc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[3]; ?>><?php echo $ver1[3]."--".$ver1[0]."--(".$ver1[1].")--(".$ver1[2].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_029</label>
          <select class="form-control col-sm-6" name="" id="formato_id_029">
            <option value="A">Opciones...</option>
            <?php $sql="SELECT actividad,
					              fecha,
					              id_029_principal FROM sgi_f_029 where estado = '1' order by id_029_principal desc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[2]; ?>><?php echo $ver1[2]."--".$ver1[0]."---(".$ver1[1].")---(".$ver1[2].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group row col-sm-12">
          <label for="formato_id" class="col-form-label col-sm-3">Formatos SGI_F_058</label>
          <select class="form-control col-sm-6" name="" id="formato_id_058">
            <option value="A">Opciones...</option>
            <?php $sql="SELECT actividad,
					              fecha,
					              id_058_principal FROM sgi_f_058 where estado = '1' order by id_058_principal desc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver1=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver1[2]; ?>><?php echo $ver1[2]."--".$ver1[0]."---(".$ver1[1].")---(".$ver1[2].")" ?></option>
            <?php endwhile; ?>
          </select>
        </div>
    </div>
</body>
</html>

