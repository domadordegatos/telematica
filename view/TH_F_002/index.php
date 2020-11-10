<html lang="es">
<head>
<?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/th_f_002.php"; 
          
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
          $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

            date_default_timezone_set('America/Bogota');
            $fecha= date('Y-m-d'); 
            $time = time(); 
            $hora = date("H:i:s",$time);
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH_F_002</title>
</head>
<body onload="cargar_tabla_temporal()" onload="ocultar_segmento_3()">
    <div class="container">
        <div class="segmen1 mt-3">
          <div class="row">
            <div class="col-4 border border-secondary">
              <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
            </div>
            <div class="col-4 border border-secondary d-flex text-center align-items-center">
              <p>FORMATO DE CAPACITACIÓN / CHARLA / REUNIÓN /DIVULGACIÓN</p>
            </div>
            <div class="col-4 border border-secondary d-flex flex-column" style="padding: 0%;">
              <row class="border border-secondary">Código: TH F 002</row>
              <row class="border border-secondary">Revisado: Septiembre 2020</row>
              <row class="border border-secondary">Versión: 02</row>
            </div>
          </div>
        </div>

        <input hidden type="text" id="identificador_del_formato" value="<?php echo $value; ?>">

        <!-- ------------------------------------------------------------------------------------------------ -->
        <div class="segmen2 mt-3">
          <div class="row">
            <div class="col-12 border border-secondary d-flex justify-content-between">
            <?php if($value != 'A'){ ?>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked disabled  name="asunto" id="" value="1">
                <label class="form-check-label" for="1">
                  <?php if($datos_th_f_002['asunto'] == '1'){ echo "CAPACITACION"; } else if($datos_th_f_002['asunto'] == '2'){ echo "CHARLA"; } else if($datos_th_f_002['asunto'] == '3'){ echo "REUNION"; } else if($datos_th_f_002['asunto'] == '4'){ echo "DIVULGACION"; } ?>
                </label>
              </div>
            <?php }else{ ?>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asunto" id="" value="1">
                <label class="form-check-label" for="1">
                  CAPACITACIÓN
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asunto" id="" value="2">
                <label class="form-check-label" for="2">
                  CHARLA
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked name="asunto" id="" value="3">
                <label class="form-check-label" for="3">
                  REUNION
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="asunto" id="" value="4">
                <label class="form-check-label" for="4">
                  DIVULGACIÓN
                </label>
              </div>
              <?php } ?>
            </div>
          </div>

          <div class="row">
            <div class="col-3 border border-secondary">
              <div class="form-group row my-auto">
                <label for="3" class="col-4 col-form-label">FECHA</label>
                <div class="col-sm-8">
            <input <?php if($value != 'A'){ echo 'disabled'; ?> value="<?php echo $datos_th_f_002['fecha']; ?>" <?php }else{?> min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" <?php }?>  class="form-control form-control-sm" type="date"  id="fecha_form">
                </div>
              </div>
            </div>
            <div class="col-3 border border-secondary">
              <div class="form-group row my-auto">
                <label for="lugar_form" class="col-sm-4 col-form-label">LUGAR:</label>
                <div class="col-sm-8">
                <?php if($value != 'A'){ ?> <?php ?>
                  <input  <?php if($value != 'A'){ echo 'disabled'; } ?> type="text" value="<?php echo $datos_th_f_002['lugar']  ?>" class="form-control form-control-sm" id="lugar_form">
                <?php }else{ ?>
                  <input type="text" value="" class="form-control form-control-sm" id="lugar_form">
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-3 border border-secondary">
              <div class="form-group row my-auto">
                <label for="3" class="col-6 col-form-label">HORA INICIO</label>
                <div class="col-sm-6">
                <input <?php if($value != 'A'){ echo 'disabled'; ?> value="<?php echo $datos_th_f_002['hora_i']; ?>" <?php }else{?> value="<?php echo $hora; ?>" <?php } ?>  class="form-control form-control-sm" type="time"  class="form-control form-control-sm" id="hora_inicio_form">
                </div>
              </div>
            </div>

            <div class="col-3 border border-secondary">
              <div class="form-group row my-auto">
                <label for="3" class="col-6 col-form-label">HORA FINAL</label>
                <div class="col-sm-6">
                  <input <?php if($value != 'A'){ echo 'disabled'; ?> value="<?php echo $datos_th_f_002['hora_f']; ?>" <?php }else{?> value="<?php echo $hora; ?>" <?php } ?> class="form-control form-control-sm" type="time" id="hora_fin_form">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4 border border-secondary">
              <div class="form-group row my-auto">
                <label for="2" class="col-sm-4 col-form-label">PERMISO N°</label>
                <div class="col-sm-8">
                  <input <?php if($value != 'A'){ echo 'disabled'; } ?> type="number" value="<?php echo $datos_th_f_002['permiso']  ?>" class="form-control form-control-sm" id="numero_permiso_form">
                </div>
              </div>
            </div>
            <div class="col-8 border border-secondary">
              <div class="form-group row my-auto">
                <label for="3" class="col-sm-2 col-form-label">INSTRUCTOR</label>
                <div class="col-sm-10">
                  <select <?php if($value != 'A'){ echo 'disabled'; } ?> class="form-control form-control-sm" id="instructor" name="instructor">
                    <option value="A"><?php if($value == '1'){ echo $datos_th_f_002['names']." ".$datos_th_f_002['lastnames']; }else{ ?>Instructores...<?php } ?></option>
                    <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row border border-secondary">
            <div class="form-group col-12">
              <label for="contenido">CONTENIDO:</label>
              <?php if($value != 'A'){ ?><?php ?>
              <textarea <?php if($value != 'A'){ echo 'disabled'; } ?> class="form-control" id="contenido_form" rows="3"><?php echo $datos_th_f_002['contenido']  ?></textarea>
              <?php }else{ ?>
                <textarea class="form-control" id="contenido_form" rows="3"></textarea>
              <?php }?>
            </div>
          </div>

        </div>
        <?php if($value == 'A'){ ?>
        <div class="d-flex justify-content-end mt-1" id="agregar_formato">
          <button class="btn btn-sm btn-primary" onclick="agregar_formato_th_f_002()">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
            </svg>
            Agregar formato</button>

            <button class="btn btn-info btn-sm mx-1" onclick="javascript:history.back(1)">
              <svg class="mr-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
                <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
                <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
              </svg>Regresar</button>
        </div>
        <?php } ?>

        <!-- ------------------------------------------------------------------------------------------------ -->
        <div class="segmen3 pt-3" id="semento_3">
          <div class="row">
            <div class="col-12" style="padding: 0%;">
              <table class="table table-bordered table-sm border-secondary">
                <tr>
                    <td colspan="6">MANIFIESTO QUE HE RECIBIDO Y ENTENDIDO EN TODO SU ALCANCE EL TEMA TRATADO Y ME COMPROMETO A CUMPLIR CON EL PROCEDIMIENTO O CONTENIDO DE LOS TEMAS Y RESPONSABILIDADES A MI ASIGNADAS. EN CONSTANCIA FIRMO:</td>
                </tr>
                <tr class="table-primary" style="text-transform: uppercase;">
                    <td>No</td>
                    <td>Nombre</td>
                    <td>Cedula</td>
                    <td>Compañia</td>
                    <td>Area/Proceso</td>
                </tr>
                <tbody id="tabla_002">

                </tbody>
                <tr>
                    <td>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                      </svg>
                    </td>
                    <td><input class="form-control form-control-sm" type="text" id="nombre_empleado" name=""></td>
                    <td><input class="form-control form-control-sm" type="number" id="cedula_empleado" name=""></td>
                    <td><input class="form-control form-control-sm" type="text" id="company_empleado" name=""></td>
                    <td><input class="form-control form-control-sm" type="text" id="area_empleado" name=""></td>
                </tr>
                <tr>
                  <td colspan="6">
                    <div class="form-group row my-auto">
                      <label for="2" class="col-sm-2 col-form-label">Ya estas registrado? </label>
                      <div class="col-sm-4">
                        <select class="form-control form-control-sm" id="empleado_id" name="empleado_id">
                          <option value="A">Trabajadores...</option>
                          <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                        </select>                      
                      </div>
                      <div class="col-sm-6">
                        <button class="btn btn-sm btn-info" onclick="agregar_registro_empleado()">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm4.5 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                          </svg>
                          Agregar Registro</button>
                        
                          <button class="btn btn-sm btn-warning" onclick="limpiar_campos_empleado()">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            Limpiar</button>

                            <button class="btn btn-info btn-sm" onclick="javascript:history.back(1)">
                              <svg class="mr-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
                                <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
                                <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
                              </svg>Regresar</button>

                              <button class="btn btn-danger btn-sm" onclick="desactivar_002()">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-slash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M11.354 4.646a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708l6-6a.5.5 0 0 1 .708 0z"/>
                              </svg> Desactivar</button>

                                                          
                      </div>

                    </div>
                    
                    
                        
                  </td>
                </tr>
            </table>
            </div>
          </div>
        </div>

    </div>
</body>
</html>