<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
    require_once "../../model/conexion.php"; 
    $conexion=conexion();
    $id_del_formato_recuperado=$_REQUEST['id_formato'];
    $personal=0;

    $user = $_SESSION['user'];

          $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
          $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
          $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
          $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
    
    $sql1="SELECT * FROM sgi_f_058
    WHERE id_058_principal = '$id_del_formato_recuperado' AND (trabajador is NULL OR trabajador2 is NULL 
    OR trabajador3 is NULL OR trabajador4 is NULL 
    OR trabajador5 is NULL)";
    $ejecutar1=mysqli_query($conexion, $sql1);
    if(mysqli_num_rows($ejecutar1)<=0){$personal=1;}    
    date_default_timezone_set('America/Bogota');
            $fecha= date('Y-m-d'); 
            $time = time(); 
            $hora = date("H:i:s",$time);

    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" value="<?php echo $id_del_formato_recuperado; ?>" id="id_formato" hidden>
    <style> .card-img-top{padding: 2rem;}</style>
    <div class="contianer d-flex  justify-content-around mt-5">

        <?php if($personal == '0'){ ?>
            <div class="segment2" style="width: 50rem;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img class="card-img-top" src="../media/add/coordinador.png" style="width: 30%;" alt="Card image cap">
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
                            <div class="col-sm-10">Cual?							
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
                            <div class="col-sm-10">Cual?											
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
                            <div class="col-sm-10">Porqué?											
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
                            <div class="col-sm-10">¿Cuántas horas durmió?												
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
                <div class="row">
                    <div class="col-sm-12 text-center my-2">
                        <a onclick="agregarme_como_personal()" class="btn btn-primary">Agregarme</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="card text-center border border-primary" style="width: 18rem; max-height: 30rem;">
            <img class="card-img-top" src="../media/add/off.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Puedes finalizar este formato si ya esta completo</h5>
              <a onclick="deshabilitar()" class="btn btn-primary">Terminarlo</a>
            </div>
        </div>
  </div>
    
</body>
</html>

<script>
    function agregarme_como_personal(){
        if($('#trabajador').val()=="" || $('#medicamento').val()=="" ||
           $('#sintoma').val()=="" || $('#enfermedad').val()=="" ||
           $('#resultado').val()=="" || $('#horas').val()=="" || 
           $('#factor').val()=="" || $('#examen').val()=="" || $('#comida').val()=="" ||
           $('#hora_trabajo').val()=="" || $('#fecha_alturas').val()=="" || 
           $('#hora_actual').val()=="" || $('#alcoholemia').val()=="" ||
           $('#tension').val()=="" || $('#recomendacion').val()==""){
          message_campos();
          }else{
        cadena="form1=" + $('#id_formato').val()+
                "&form3=" + $('#trabajador').val() +
                "&form4=" + $('#medicamento').val() +
                "&form5=" + $('#sintoma').val() +
                "&form6=" + $('#enfermedad').val() +
                "&form7=" + $('#resultado').val() +
                "&form8=" + $('#horas').val() +
                "&form9=" + $('#factor').val() +
                "&form10=" + $('#examen').val() +
                "&form11=" + $('#alcohol').val() +
                "&form12=" + $('#comida').val() +
                "&form13=" + $('#hora_trabajo').val() +
                "&form14=" + $('#fecha_alturas').val() +
                "&form15=" + $('#hora_actual').val() +
                "&form16=" + $('#alcoholemia').val() +
                "&form17=" + $('#tension').val() +
                "&form18=" + $('#recomendacion').val() +
                "&form19="  + $('input[name="p-01"]:checked').val()+
                "&form20="  + $('input[name="p-02"]:checked').val()+
                "&form21="  + $('input[name="p-03"]:checked').val()+
                "&form22="  + $('input[name="p-04"]:checked').val()+
                "&form23="  + $('input[name="p-05"]:checked').val()+
                "&form24="  + $('input[name="p-06"]:checked').val()+
                "&form25="  + $('input[name="p-07"]:checked').val()+
                "&form26="  + $('input[name="p-08"]:checked').val()+
                "&form27="  + $('input[name="p-09"]:checked').val()+
                "&form28="  + $('input[name="p-10"]:checked').val()+
                "&form29="  + $('input[name="p-11"]:checked').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/058/personal.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Registro Exitoso");
                      setTimeout ("location.reload();", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estar registrado como personal");
                      return false;
                    }else if(r==3){
                      alertify.error("Error de bd");
                      return false;
                    }else{
                      alertify.error("Error desconocido");
                      return false;
                    }
                  }
                });
            }
    }
    function deshabilitar(){
        cadena="form1=" + $('#id_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/058/deshabilitar.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Formato listo para imprimir");
                      setTimeout ("history.back(1);", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estar registrado como personal");
                      return false;
                    }else if(r==3){
                      alertify.error("Error de bd");
                      return false;
                    }else{
                      alertify.error("Error desconocido");
                      return false;
                    }
                  }
                });
    }
    function message_campos(){
        alertify.error("Por favor usa todos los campos");
        return false;
      }
</script>