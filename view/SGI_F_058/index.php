<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/sgi_f_058.php";

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
    <title>Document</title>
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
                    CUESTIONARIO DE APTITUD FISICA
                </div>
                <div class="col-3 border  border-secondary d-flex flex-column" style="padding: 0%;">
                  <row class="border"><div class="border border-secondary col-sm-12">Código: SGI F 058</div></row>
                  <row class="border"><div class="border border-secondary col-sm-12">Revisado: Septiembre 2020</div></row>
                  <row class="border"><div class="border border-secondary col-sm-12">Versión: 01</div></row>
                </div>
              </div>
        </div>

        <div class="segment2 mt-3">
            <div class="row">
                <div class="col-sm-9 border-secondary border form-inline">
                    <label>Actividad:</label>
                    <input type="text" class="form-control form-control-sm ml-2 col-sm-9" id="actividad">
                </div>
                <div class="col-sm-3 border-secondary border form-inline">
                    <label>Fecha:</label>
                    <input type="date" class="ml-2 form-control form-control-sm col-sm-9" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" id="fecha">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 d-flex flex-row-reverse border border-secondary">Nombre del Trabajador</div>
                <div class="col-sm-3 border border-secondary">
                    <select class="form-control form-control-sm" id="trabajador">
                        <option value="A">trabajador...</option>
                        <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                        $result=mysqli_query($conexion,$sql);
                                        while ($ver=mysqli_fetch_row($result)):?>
                              <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                            <?php endwhile; ?>
                      </select>
                </div>
            </div>

            <div class="row mt-2 text-white bg-info">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">Items</div>
                        <div class="col-sm-10 border-secondary border">Cuestionario							
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            SI
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            NO
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">01</div>
                        <div class="col-sm-10 border-secondary border">Esta tomando actualmente algún medicamento?										
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-01">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-01" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">Cual? (si es "no", no llenar)							
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="text" class="form-control form-control-sm" id="medicamento">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">02</div>
                        <div class="col-sm-10 border-secondary border">En los últimos días a presentado algún síntoma o signo de enfermedad? 												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-02">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-02" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">Cual? (si es "no", no llenar)											
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="text" class="form-control form-control-sm" id="sintoma">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">03</div>
                        <div class="col-sm-10 border-secondary border">Cree usted tener alguna enfermedad que le impida realizar este trabajo?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-03">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-03" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">Porqué? (si es "no", no llenar)											
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="text" class="form-control form-control-sm" id="enfermedad">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">04</div>
                        <div class="col-sm-10 border-secondary border">Se realizó su examen médico ocupacional al ingreso a la compañía?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-04">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-04" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10 ">Resultado												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="text" class="form-control form-control-sm" id="resultado">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">05</div>
                        <div class="col-sm-10 border-secondary border">Durmió normalmente en su descanso?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-05">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-05" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">¿Cuántas horas durmió? (si es "no", marque cero)												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="number" class="form-control form-control-sm" id="horas">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">06</div>
                        <div class="col-sm-10 border-secondary border">Ha realizado trabajos similares anteriormente?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-06">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-06" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">07</div>
                        <div class="col-sm-10 border-secondary border">Le han explicado el procedimiento y se siente capaz para realizarlo?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-07">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-07" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">08</div>
                        <div class="col-sm-10 border-secondary border">Ha tenido algún incidente de salud realizando trabajos similares anteriormente?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-08">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-08" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">09</div>
                        <div class="col-sm-10 border-secondary border">Ha tenido estado febril en las ultimas 12 horas?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-09">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-09" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">10</div>
                        <div class="col-sm-10 border-secondary border">Sufre de vértigo?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-10">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-10" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">11</div>
                        <div class="col-sm-10 border-secondary border">Se siente preparado para realizar la labor, los factores propios de su cotianidad le permitirán realizar la labor de acuerdo  a lo planeado?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border";">
                    <div class="row" style="height: 50px;">
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">SI</label>
                            <input type="radio" class="mr-3 form-check-input" value="SI"  name="p-11">
                        </div>
                        <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                            <label class="form-check-label">NO</label>
                            <input type="radio" class="mr-3 form-check-input" value="NO"  name="p-11" checked>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">12</div>
                        <div class="col-sm-10 border-secondary border">¿Qué factor siente que no le permite concentrarse? (familiar, econonómico, social, estado de ánimo)												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="text" class="form-control form-control-sm" id="factor">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">13</div>
                        <div class="col-sm-10 border-secondary border">Cuándo fue su último examen periódico y se incluyo examen de laboratorio, Visiometría y audiometría?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="date" class="form-control form-control-sm" value="<?php echo $fecha; ?>" id="examen">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">14</div>
                        <div class="col-sm-10 border-secondary border">Cuando ingirió alcohol por última vez?(si no toma no llenar)										
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="date" class="form-control form-control-sm" id="alcohol">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">15</div>
                        <div class="col-sm-10 border-secondary border">A que horas tuvo su última comida?												
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="time" class="form-control form-control-sm" value="<?php echo $hora; ?>" id="comida">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">16</div>
                        <div class="col-sm-10 border-secondary border">A que hora inicio a trabajar hoy (llego a su sede de trabajo)											
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="time" class="form-control form-control-sm" value="<?php echo $hora; ?>" id="hora_trabajo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border-secondary border">
                    <div class="row">
                        <div class="col-sm-2 border-secondary border">17</div>
                        <div class="col-sm-10 border-secondary border">Fecha de realización entrenamiento trabajo en alturas avanzado (si aplica para el trabajo)											
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-secondary border d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-sm-12 border-secondary border form-check d-flex justify-content-center">
                            <input type="date" class="form-control form-control-sm" value="<?php echo $fecha; ?>" id="fecha_alturas">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="segment3 mt-2">
            <div class="row text-white bg-info">
                <div class="col-sm-12 text-center">VALORACION</div>
            </div>
            <div class="row">
                <div class="col-sm-9 border-secondary border form-inline d-flex flex-row-reverse">
                    <label>HORA:</label>
                </div>
                <div class="col-sm-3 border-secondary border form-inline">
                    <input type="time" value="13:45:00" class="ml-2 form-control form-control-sm col-sm-9" value="<?php echo $hora; ?>" id="hora_actual">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border-secondary border form-inline d-flex flex-row-reverse">
                    <label>RESULTADO DE ALCOHOLIMETRIA:						                    </label>
                </div>
                <div class="col-sm-3 border-secondary border form-inline">
                    <input type="number" value="0" class="ml-2 form-control form-control-sm col-sm-9" id="alcoholemia">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border-secondary border form-inline d-flex flex-row-reverse">
                    <label>RESULTADO DE TOMA DE TENSIÓN:						                    </label>
                </div>
                <div class="col-sm-3 border-secondary border form-inline">
                    <input type="number" value="0" class="ml-2 form-control form-control-sm col-sm-9" id="tension">
                </div>
            </div>
            <div class="row bg-info text-center text-white">
                <div class="col-sm-12">DECLARO QUE LA INFORMACION SUMINISTRADA ES VERAS Y FIDEDIGNA. 				                </div>
            </div>
            <div class="row bg-info text-center text-white">
                <div class="col-sm-12">Concepto y recomendaciones:														                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-secondary border"> <input type="text" id="recomendacion" class="form-control form-control-sm" placeholder="Recomendacion..."></div>
            </div>
            <div class="row bg-info text-center text-white">
                <div class="col-sm-12">Con el fin de asegurar que aquellos empleados que han sido autorizados para realizar trabajos de alto riesgo se encuentran en óptimas condiciones, el personal de Telematica  deberá diligenciar este cuestionario														                </div>
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
    </div>
    
</body>
</html>