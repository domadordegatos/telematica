<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/sgi_f_059.php";
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

    <div class="container">
        <div class="segmen1 mt-3">
            <div class="row">
              <div class="col-4 border border-secondary">
                <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
              </div>
              <div class="col-4 border border-secondary d-flex text-center align-items-center">
                <p>CERTIFICADO DE APOYO PARA TRABAJO EN ALTURAS</p>
              </div>
              <div class="col-4 border border-secondary d-flex flex-column" style="padding: 0%;">
                <row class="border border-secondary">Código: SGI F 059</row>
                <row class="border border-secondary">Revisado: Febrero 2019</row>
                <row class="border border-secondary">Versión: 03</row>
              </div>
            </div>
          </div>


          <div class="segement2">
              <div class="row">
                  <div class="col-sm-12 text-center  border border-secondary text-white bg-info">INFORMACIÓN GENERAL</div>
              </div>

              <div class="row">
                  <div class="col-sm-2 border-secondary border">No PERMISO DE TRABAJO</div>
                  <div class="col-sm-2 border-secondary border"><input type="text" class="form-control" id="numero_permiso"></div>
                  <div class="col-sm-2 border-secondary border">DESCRIPCION DEL TRABAJO</div>
                  <div class="col-sm-2 border-secondary border"><input type="text" class="form-control" id="descripcion_trabajo"></div>
                  <div class="col-sm-2 border-secondary border">UBICACION EXACTA DEL TRABAJO</div>
                  <div class="col-sm-2 border-secondary border"><input type="text" class="form-control" id="ubicacion_trabajo"></div>
              </div>
              
              <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group row border border-secondary"  style="margin-bottom: 0px;">
                        <label class="col-sm-4 col-form-label">ALTURA TRABAJO</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" id="altura">
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group row border border-secondary"  style="margin-bottom: 0px;">
                        <label class="col-sm-3 col-form-label">HORA INICIO</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="time" value="<?php echo $hora; ?>" id="h_inicio">
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group row border border-secondary"  style="margin-bottom: 0px;">
                        <label class="col-sm-5 col-form-label">HORA FINALIZACIÓN</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="time" value="<?php echo $hora; ?>" id="h_fin">
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group row border border-secondary"  style="margin-bottom: 0px;">
                        <label class="col-sm-4 col-form-label">FECHA INICIO</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" id="fecha_inicio">
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group row border border-secondary"  style="margin-bottom: 0px;">
                        <label class="col-sm-5 col-form-label">FECHA FINALIZACIÓN</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="date" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" id="fecha_fin">
                        </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-2 border-secondary border">SISTEMA DE ACCESO</div>
                  <div class="col-sm-10 border-secondary border d-flex justify-content-around align-items-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sistema_acceso" value="Escalera Fija">
                        <label class="form-check-label" for="inlineRadio1">Escalera Fija</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sistema_acceso" value="Escalera Portatil">
                        <label class="form-check-label" for="inlineRadio2">Escalera Portatil</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sistema_acceso" value="Andamio">
                        <label class="form-check-label" for="inlineRadio3">Andamio</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sistema_acceso" value="Mastil con Peldaños">
                        <label class="form-check-label" for="inlineRadio3">Mastil con Peldaños</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sistema_acceso" value="Otro" checked>
                        <label class="form-check-label" for="inlineRadio3">Otro:</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-control form-control-sm" type="text" id="otro_sistema_acceso" value="N/A">
                      </div>
                      
                  </div>
              </div>

              <div class="row  border border-secondary">
                  
                  <div class="col-sm-12">EPP USADOS EN LA ACTIVIDAD: <input type="text" class="form-control form-control-sm" id="epp"></div>
              </div>
              <div class="row  border border-secondary">
                  
                  <div class="col-sm-12">EPCC USADOS EN LA ACTIVIDAD: <input type="text" class="form-control form-control-sm" id="epcc"></div>
              </div>
              <div class="row  border border-secondary">
                  
                  <div class="col-sm-12">HERRAMIENTAS Y EQUIPOS A USAR: <input type="text" class="form-control form-control-sm" id="herramientas"></div>
              </div>
              
              <div class="row">
                  <div class="col-sm-12 text-center border-secondary border bg-info text-white">PERSONAL AUTORIZADO PARA TRABAJAR EN ALTURAS</div>
              </div>
              <div class="row">
                  <div class="col-sm-6 border border-secondary">Primer Integrante</div>
                  <div class="col-sm-6 border border-secondary">
                    <select class="form-control form-control-sm" id="integrante1">
                        <option value="A">Personal...</option>
                          <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                      </select>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 border border-secondary bg-info text-center text-white">
                      REQUERIMIENTOS DE CLARIDAD
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-10 border-secondary border">EL SITIO DE TRABAJO CUENTA CON EL REQUERIMIENTO DE CLARIDAD ADECUDADO
                      CON RESPECTO A LA ESTRUCTURA DE TRABAJO
                  </div>
                  <div class="col-sm-2 border-secondary border d-flex align-items-center justify-content-around">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sitio_trabajo" value="SI" checked>
                        <label class="form-check-label">SI</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sitio_trabajo" value="NO">
                        <label class="form-check-label">NO</label>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-5 border border-secondary  d-flex align-items-center justify-content-around"><img src="../media/photos/torre.PNG" alt=""></div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-1 border border-secondary">A</div>
                      <div class="col-sm-9 border border-secondary">Distancia de caida libre: (igual a la logitud de la eslinga)</div>
                      <div class="col-sm-2 border border-secondary"><input type="number" id="caida_libre" class="form-control form-control-sm"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-1 border border-secondary">B</div>
                      <div class="col-sm-9 border border-secondary">Distancia de aceleración: (igual a la logitud del absorvente)</div>
                      <div class="col-sm-2 border border-secondary"><input type="number" id="aceleracion" class="form-control form-control-sm"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-1 border border-secondary">C</div>
                      <div class="col-sm-9 border border-secondary">Altura del trabajador</div>
                      <div class="col-sm-2 border border-secondary"><input type="number" id="altura_trabajados" class="form-control form-control-sm"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-1 border border-secondary">FS</div>
                      <div class="col-sm-9 border border-secondary">Factor de seguridad (debe ser como minimo 1 metro)</div>
                      <div class="col-sm-2 border border-secondary"><input type="number" id="factor_seguridad" class="form-control form-control-sm"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-1 border border-secondary">D</div>
                      <div class="col-sm-9 border border-secondary">Requerimiento de claridad = A+B+C+FS</div>
                      <div class="col-sm-2 border border-secondary"><input type="number" id="requerimiento_claridad" class="form-control form-control-sm"></div>
                    </div>
                  </div>
              </div>
              
              <div class="row">
                <div class="col-sm-12 text-center bg-info text-white border border-secondary">LISTA DE CHEQUEO</div>
              </div>
              <div class="row">
                <div class="col-sm-1 border-secondary border">No</div>
                <div class="col-sm-9 border-secondary border">PREGUNTA/REQUISITO</div>
                <div class="col-sm-2"><div class="row text-center">
                  <div class="col-sm-6 border-secondary border">SI</div>
                  <div class="col-sm-6 border-secondary border">NA</div>
                </div></div>
              </div>

              <div class="row">
                <div class="col-sm-1 border-secondary border">01</div>
                <div class="col-sm-9 border-secondary border">¿Los trabajadores se encuentran afiliados a seguridad social? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-01" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-01" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">02</div>
                <div class="col-sm-9 border-secondary border">¿Los trabajadores cuentan con certificado de aptitud física (apto) ?		Certificado de aptitud física (apto) 						
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-02" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-02" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">03</div>
                <div class="col-sm-9 border-secondary border">¿Los trabajadores cuentan con capacitación o certificado de competencia para trabajo en alturas vigente?		Certificado de competencia para trabajo en alturas 						
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-03" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-03" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">04</div>
                <div class="col-sm-9 border-secondary border">¿Se diligencio el permiso de trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-04" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-04" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">05</div>
                <div class="col-sm-9 border-secondary border">¿Se realizó la charla de seguridad antes de iniciar el trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-05" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-05" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">06</div>
                <div class="col-sm-9 border-secondary border">¿Se establecieron los roles a desempeñar durante el desarrollo del trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-06" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-06" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">07</div>
                <div class="col-sm-9 border-secondary border">¿Existe un AST o análisis de riesgo vigente y divulgado, para la tarea y los controles recomendados han sido dispuestos?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-07" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-07" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">08</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta y conocen el instructivo de rescate y plan de emergencia?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-08" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-08" value="NO"> </div>
                </div></div>
              </div>
              <div class="row"><div class="col-sm-12 bg-info text-center text-white">SITIO DE TRABAJO / ELEMENTOS</div></div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">09</div>
                <div class="col-sm-9 border-secondary border d-flex justify-content-between align-items-center">Se revisó el método de acceso al sitio
                  <input type="text" class="col-sm-4 form-control form-control-sm" id="acceso_sitio" placeholder="metodo de acceso...">
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-09" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-09" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">10</div>
                <div class="col-sm-9 border-secondary border">La estructura de la torre, poste, andamio o sitio donde se realizara el trabajo, está en buenas condiciones, no presenta daño estructural? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-10" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-10" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">11</div>
                <div class="col-sm-9 border-secondary border">La línea de vida ha sido  inspeccionada? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-11" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-11" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">12</div>
                <div class="col-sm-9 border-secondary border">La línea de vida es adecuada para soportar una caída? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-12" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-12" value="NO"> </div>
                </div></div>
              </div>

              <div class="row"><div class="col-sm-12 bg-info text-center text-white">LA PLATAFORMA DE TRABAJO</div></div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Es firme?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-13" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-13" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Se encuentra en orden, no hay objetos sueltos?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-14" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-14" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Cuenta con barandas de 1, 20 mtrs?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-15" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-15" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Tiene instalados rodapiés?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-16" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-16" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta con un sistema de limitación de movimiento o restricción de caída?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-17" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-17" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">13</div>
                <div class="col-sm-9 border-secondary border">¿Tiene el piso cubierto para evitar caída de objetos pequeños por rendijas?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-18" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-18" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">14</div>
                <div class="col-sm-9 border-secondary border">¿Los anclajes a utilizar son confiables? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-19" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-19" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">15</div>
                <div class="col-sm-9 border-secondary border">¿Se han inspeccionado todos los elementos de izaje que se vayan utilizar durante el trabajo? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-20" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-20" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">16</div>
                <div class="col-sm-9 border-secondary border">¿Los equipos de izaje de materiales son adecuados?. 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-21" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-21" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">17</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta con personal suficiente para realizar el trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-22" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-22" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">18</div>
                <div class="col-sm-9 border-secondary border">¿Se inspeccionaron los elementos propios del área de trabajo que tengan el riesgo de caer? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-23" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-23" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">19</div>
                <div class="col-sm-9 border-secondary border">¿Se ha verificado que el método de subir herramientas hacia el sitio de trabajo es seguro? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-24" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-24" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">20</div>
                <div class="col-sm-9 border-secondary border">¿Se ha señalizado y aislado el área debajo de la cual se realizará el trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-25" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-25" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">21</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta con ayudante de seguridad?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-26" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-26" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">22</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta con portaherramientas y cuerdas para amarrar las herramientas cuando se esté realizando el trabajo?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-27" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-27" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">23</div>
                <div class="col-sm-9 border-secondary border d-flex align-items-center justify-content-around">¿Se ha dispuesto de un método para asegurar que piezas retiradas durante el trabajo en altura no caigan? Algún tipo de recipiente?
                  <input type="text" class="form-control form-control-sm" id="recipiente" placeholder="recipiente...">
                </div>
                <div class="col-sm-2"><div class="row" style="height: 74px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-28" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-28" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">24</div>
                <div class="col-sm-9 border-secondary border">¿El peso de las piezas, elementos o equipos que se vayan a manipular en lo alto es adecuado para la capacidad de la plataforma de trabajo y de la persona(s) que realizará el trabajo? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-29" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-29" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">25</div>
                <div class="col-sm-9 border-secondary border">¿El volumen de las piezas, elementos o equipos que se vayan a manipular en lo alto es adecuado para la capacidad de la plataforma de trabajo y de la persona(s) que realizará el trabajo? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-30" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-30" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">26</div>
                <div class="col-sm-9 border-secondary border">¿El personal que realiza trabajo en alturas se encuentre libre de elementos en los bolsillos que pueda causar lesiones durante la actividad o durante una caída. 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-31" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-31" value="NO"> </div>
                </div></div>
              </div>

              <div class="row"><div class="col-sm-12 bg-info text-center text-white">OTROS</div></div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">27</div>
                <div class="col-sm-9 border-secondary border">¿Se cuenta con el EPCC equipo de protección contra caída (arnés y eslingas) certificados? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-32" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-32" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">28</div>
                <div class="col-sm-9 border-secondary border">¿El EPCC ha sido inspeccionado según la lista de chequeo Lista de chequeo arnés 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-33" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-33" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">29</div>
                <div class="col-sm-9 border-secondary border">¿Se elaboró un procedimiento y es conocido por todos los ejecutantes, 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-34" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-34" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">30</div>
                <div class="col-sm-9 border-secondary border">¿Las condiciones climáticas son adecuadas para trabajar en campo abierto? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-35" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-35" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">30</div>
                <div class="col-sm-9 border-secondary border">¿¿Hay presencia o amenaza de lluvia?								 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-36" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-36" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">30</div>
                <div class="col-sm-9 border-secondary border">¿Las superficies de trabajo están secas?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-37" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-37" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">30</div>
                <div class="col-sm-9 border-secondary border">Hay presencia o amenaza de Tormentas eléctricas?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-38" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-38" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">30</div>
                <div class="col-sm-9 border-secondary border">¿Hay vientos fuertes que impidan el ascenso y trabajo seguro?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-39" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-39" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">31</div>
                <div class="col-sm-9 border-secondary border">¿Se requiere realizar medición de atmosfera para realizar el trabajo? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-40" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-40" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">32</div>
                <div class="col-sm-9 border-secondary border">¿Si la altura del trabajo supera los 15mts. Dispone del sistema de comunicación efectiva entre personal en alturas y piso?. (Radios dos vías).								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-41" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-41" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">33</div>
                <div class="col-sm-9 border-secondary border">¿Si la altura del trabajo es inferior a 15mts evaluó si la comunicación es clara y efectiva entre personal en piso y en alturas.? 								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 50px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-42" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-42" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">34</div>
                <div class="col-sm-9 border-secondary border">¿Se diligenció el formato de aptitud física?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-43" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-43" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row">
                <div class="col-sm-1 border-secondary border">35</div>
                <div class="col-sm-9 border-secondary border">¿La estructura para el ascenso es segura?								
                </div>
                <div class="col-sm-2"><div class="row" style="height: 31px;">
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-44" value="SI" checked> </div>
                  <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="PE-44" value="NO"> </div>
                </div></div>
              </div>
              
              <div class="row"><div class="col-sm-12 text-center border border-secondary">EN CASO DE TORMENTA ELECTRICA SE DEBE SUSPENDER EL TRABAJO</div></div>
              <!-- <div class="row"><div class="col-sm-12 bg-info text-center text-white">SUPERVISION Y CONTROL DEL TRABAJO</div></div>

              <div class="row">
                <div class="col-sm-2 border-secondary border">COORDINADOR ALTURAS</div>
                <div class="col-sm-4 border-secondary border d-flex align-items-center justify-content-around">
                  <select class="form-control form-control-sm" id="coordinador">
                    <option value="A">coordinadores...</option>
                      <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios order by lastnames asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                      <?php endwhile; ?>
                  </select>
                </div>
                <div class="col-sm-2 border-secondary border d-flex align-items-center justify-content-around">RESCATISTA</div>
                <div class="col-sm-4 border-secondary border d-flex align-items-center justify-content-around">
                  <select class="form-control form-control-sm" id="rescatista">
                    <option value="A">rescatistas...</option>
                      <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios order by lastnames asc";
                                  $result=mysqli_query($conexion,$sql);
                                  while ($ver=mysqli_fetch_row($result)):?>
                        <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                      <?php endwhile; ?>
                  </select>
                </div>
              </div> -->

              <!-- <div class="row"><div class="col-sm-12 bg-info text-center text-white">AUTORIZACION PARA EL TRABAJO</div></div> -->

              <div class="row mt-2 mb-3">
                <div class="col-sm-12 d-flex flex-row-reverse">
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
                        </svg>Regresar
                      </button>
                </div>
            </div>
              
              
          </div>

    </div>
    
</body>
</html>