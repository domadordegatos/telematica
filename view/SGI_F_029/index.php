<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI_F_030</title>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/sgi_f_029.php";

          $conexion=conexion();
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
</head>
<body>
    <input type="text" hidden id="user" value="<?php echo $user; ?>">
    <div class="container">
        <div class="segment1 mt-3">
            <div class="row">
                <div class="col-3 border border-secondary">
                  <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
                </div>
                <div class="col-6 border border-secondary d-flex text-center align-items-center justify-content-center">
                  LISTA DE CHEQUEO PARA INSPECCION KIT DE RESCATE
                </div>
                <div class="col-3 border  border-secondary d-flex flex-column" style="padding: 0%;">
                  <row class="border"><div class="border border-secondary col-sm-12">Código: SGI F 029</div></row>
                  <row class="border"><div class="border border-secondary col-sm-12">Revisado: Septiembre 2020</div></row>
                  <row class="border"><div class="border border-secondary col-sm-12">Versión: 01</div></row>
                </div>
              </div>
        </div>

        <div class="segmen2 mt-3">
            <div class="row">
                <div class="col-sm-8 border-secondary border form-inline">
                    <label>Actividad:</label>
                    <input type="text" class="form-control form-control-sm ml-2 col-sm-8" id="actividad">
                </div>
                <div class="col-sm-4 border-secondary border form-inline">
                    <label>Fecha:</label>
                    <input type="date" class="ml-2 form-control form-control-sm col-sm-8" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" id="fecha">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-secondary border text-center">
                    X cuando el elemento este en mal estado, OK cuando el elemento se encuentre operativo y en buen estado, N/A cuando no haga parte del equipo																																												
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-secondary border bg-info text-center text-white">
                    ARNES
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border border-secondary  d-flex text-center align-items-center justify-content-center">
                    APROBACION LIDER ACTIVIDAD
                    <select class="form-control form-control-sm" id="aprobacion">
                        <option value="A">Lider...</option>
                        <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                        $result=mysqli_query($conexion,$sql);
                                        while ($ver=mysqli_fetch_row($result)):?>
                              <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                            <?php endwhile; ?>
                      </select>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12 border border-secondary">
                            SERIAL ARNES 								
                            <input type="text" class="form-control form-control-sm" id="serial">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 border border-secondary">
                            FECHA FABRICACIÓN 								
                            <input type="date" class="form-control form-control-sm"  id="fecha_fabricacion">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">01</div>
                        <div class="col-sm-11 border-secondary border">Reatas de hombros							
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-01">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-01" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">02</div>
                        <div class="col-sm-11 border-secondary border">Reatas  de muslos													
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-02">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-02" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">03</div>
                        <div class="col-sm-11 border-secondary border">Reatas Subpélvica														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-03">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-03" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">04</div>
                        <div class="col-sm-11 border-secondary border">Costuras														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-04">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-04" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">05</div>
                        <div class="col-sm-11 border-secondary border">Etiquetas														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-05">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-05" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">06</div>
                        <div class="col-sm-11 border-secondary border">Indicador de impacto														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-06">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-06" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">07</div>
                        <div class="col-sm-11 border-secondary border">Anillo en D, dorsal														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-07">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-07" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">08</div>
                        <div class="col-sm-11 border-secondary border">Anillo en D, pectoral														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-08">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-08" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">09</div>
                        <div class="col-sm-11 border-secondary border">Anillo en D, laterales 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-09">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-09" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">10</div>
                        <div class="col-sm-11 border-secondary border">Anillo en D, ventral 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-10">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-10" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">11</div>
                        <div class="col-sm-11 border-secondary border">Hebillas pasantes														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-11">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-11" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">12</div>
                        <div class="col-sm-11 border-secondary border">Hebillas de ajuste														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-12">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-12" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">13</div>
                        <div class="col-sm-11 border-secondary border">Hebillas de conexión 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-13">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-13" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">14</div>
                        <div class="col-sm-11 border-secondary border">Guía para correa dorsal 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-14">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-14" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">15</div>
                        <div class="col-sm-11 border-secondary border">Guía para correa pectoral											
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-15">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-15" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">16</div>
                        <div class="col-sm-11 border-secondary border">Faja lumbar														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-16">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-16" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="segmen3 mt-2">
            <div class="row">
                <div class="col-sm-12 border border-secondary bg-info text-white text-center">ESLINGAS</div>
            </div>
            <div class="row">
                <div class=" bg-info col-sm-6 border border-secondary text-white  d-flex text-center align-items-center justify-content-center">
                    ESLINGA Y
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12 border border-secondary">
                            SERIAL						
                            <input type="text" class="form-control form-control-sm" id="serial_eslinga">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 border border-secondary">
                            FECHA FABRICACIÓN 								
                            <input type="date" class="form-control form-control-sm" id="fecha_fabricacion_eslinga">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">17</div>
                        <div class="col-sm-11 border-secondary border">Ganchos con cierre automático doble seguridad 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-17">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-17" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">18</div>
                        <div class="col-sm-11 border-secondary border">Hebillas de ajuste 														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-18">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-18" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">19</div>
                        <div class="col-sm-11 border-secondary border">Absorbedor de energía														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-19">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-19" checked>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-1 border-secondary border">20</div>
                        <div class="col-sm-11 border-secondary border">Reatas y costuras														
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">X</label>
                            <input type="radio" class="mr-3 form-check-input" value="X"  name="p-20">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">OK</label>
                            <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-20" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="segmen4 mt-2">
                <div class="row">
                    <div class=" bg-info text-white col-sm-6 border border-secondary  d-flex text-center align-items-center justify-content-center">
                        ESLINGA POSICIONAMIENTO								
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                SERIAL						
                                <input type="text" class="form-control form-control-sm" id="serial_eslinga_posicionamiento">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                FECHA FABRICACIÓN 								
                                <input type="date" class="form-control form-control-sm" id="fecha_fabricacion_eslinga_posicionamiento">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">21</div>
                            <div class="col-sm-11 border-secondary border">Ganchos con cierre automático doble seguridad 							 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-21">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-21" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">22</div>
                            <div class="col-sm-11 border-secondary border">Ajustador/hebilla																					
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-22">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-22" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">23</div>
                            <div class="col-sm-11 border-secondary border">Reatas y costuras																					
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-23">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-23" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        REVISADO POR:
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <select class="form-control form-control-sm" id="revisado">
                            <option value="A">revisado...</option>
                            <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                            $result=mysqli_query($conexion,$sql);
                                            while ($ver=mysqli_fetch_row($result)):?>
                                  <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                                <?php endwhile; ?>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 border border-secondary">
                        OBSERVACIONES
                        <textarea id="observaciones" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div class="row my-3 d-flex flex-row-reverse">
                    <button type="button" class="btn btn-sm btn-primary" onclick="agregar_informe()">Agregar Informe
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                    </button>
          
                    <button class="btn btn-info btn-sm mr-1" onclick="javascript:history.back(1)">
                      <svg class="mr-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
                        <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
                        <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
                      </svg>Regresar</button>
                    
                  </div>
        </div>