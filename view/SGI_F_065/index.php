<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php";
          require_once "../../model/sgi_f_065.php"; 
          $conexion=conexion();

          $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
    ?>
</head>
<body>

    <div class="container">
        <div class="segment1 mt-3">
            <div class="row border border-secondary">
                <div class="col-4 border border-secondary">
                  <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
                </div>
                <div class="col-4 border border-secondary d-flex text-center align-items-center">
                  <p class="text-center">LISTA DE CHEQUEO PARA TRABAJOS</p>
                </div>
                <div class="col-4 border border-secondary d-flex flex-column" style="padding: 0%;">
                  <row class="border border-secondary">Código: SGI F 065</row>
                  <row class="border border-secondary">Revisado: Mayo 2019</row>
                  <row class="border border-secondary">Versión: 01</row>
                </div>
              </div>
            </div>

        <div class="segment2 mt-3">

            <div class="row text-center">
                <div class="col-sm-12 border-secondary border  bg-info text-white">
                    LISTA DE CHEQUEO PARA TRABAJOS (LLENAR EN LA CHARLA DE 5 MINUTOS POR TODOS LOS EJECUTANTES)
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 border-secondary border">
                    SITIO DE TRABAJO:
                </div>
                <div class="col-sm-8 border-secondary border">
                    <input class="form-control form-control-sm" type="text" value="" id="lugar" placeholder="lugar...">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 border-secondary border">
                    LIDER DE TRABAJO:
                </div>
                    
                <div class="col-sm-8 border-secondary border">
                    <select class="form-control form-control-sm" id="lider_1">
                        <option value="A">Lider....</option>
                        <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                      </select>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-8 border-secondary border">
                    <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-sm-6 col-form-label">EN EMERGENCIA CONTACTAR A NOMBRE DE</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control form-control-sm" id="emergencia" placeholder="nombre...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 border-secondary border">
                    <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-sm-3 col-form-label">TELEFONO</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control form-control-sm" id="telefono" placeholder="123....">
                        </div>
                    </div>
                </div>
            </div>

        <div class="segment3 my-3">
            <div class="row">
                <div class="col-sm-12 text-center border-secondary border bg-info text-white">
                    DESCRIPCION DEL TRABAJO A REALIZAR
                </div>
            </div>
            <div class="row border-secondary border">
                <textarea class="form-control" id="descripcion" rows="1" placeholder="Aquí puedes escribir"></textarea>
            </div>


            <div class="row text-center">
                <div class="col-sm-9 border-secondary border">
                    EVALUACION ANTES DE INICIAR LA TAREA
                </div>
                <div class="col-sm-1 border-secondary border">
                    SI
                </div>
                <div class="col-sm-1 border-secondary border">
                    NO
                </div>
                <div class="col-sm-1 border-secondary border">
                    N/A
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    ¿Cuenta con un procedimiento de trabajo definido, lo conoce y entiende ?
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_01" value="SI" checked>
                    <input type="radio" name="ch_01" value="NO" >
                    <input type="radio" name="ch_01" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Reportaron su llegada al sitio y coordinaron con la autoridad de área?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_02" value="SI" checked>
                    <input type="radio" name="ch_02" value="NO" >
                    <input type="radio" name="ch_02" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    ¿ Definieron las necesidades de señalizacion y demarcacion?  						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_03" value="SI" checked>
                    <input type="radio" name="ch_03" value="NO" >
                    <input type="radio" name="ch_03" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se cuenta con los elementos necesarios para la señalización del área?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_04" value="SI" checked>
                    <input type="radio" name="ch_04" value="NO" >
                    <input type="radio" name="ch_04" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se requieren Aislamientos electricos mecanicos o de proceso?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_05" value="SI" checked>
                    <input type="radio" name="ch_05" value="NO" >
                    <input type="radio" name="ch_05" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se realizaron los aislamientos? 						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_06" value="SI" checked>
                    <input type="radio" name="ch_06" value="NO" >
                    <input type="radio" name="ch_06" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se revisó el área, se identificaron condiciones peligrosas (Obstrucciones, objetos que golpeen, escaleras, huecos, insectos, ofidios otros).						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_07" value="SI" checked>
                    <input type="radio" name="ch_07" value="NO" >
                    <input type="radio" name="ch_07" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Estan previstos los controles para mitigar los riesgos identificados en el área?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_08" value="SI" checked>
                    <input type="radio" name="ch_08" value="NO" >
                    <input type="radio" name="ch_08" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Existe alguna condicion de riesgo identificada sin un control?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_09" value="SI" checked>
                    <input type="radio" name="ch_09" value="NO" >
                    <input type="radio" name="ch_09" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se cuenta con elementos  y herramientas adecuadas para el trabajo?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_10" value="SI" checked>
                    <input type="radio" name="ch_10" value="NO" >
                    <input type="radio" name="ch_10" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    En caso de trabajos en altura,  La herramienta de mano se carga de forma segura?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_11" value="SI" checked>
                    <input type="radio" name="ch_11" value="NO" >
                    <input type="radio" name="ch_11" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    En caso de trabajos con productos quimicos, conoce el procedimiento de manejo del producto? Si aplica.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_12" value="SI" checked>
                    <input type="radio" name="ch_12" value="NO" >
                    <input type="radio" name="ch_12" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    En caso de trabajos con productos quimicos, conoce la hoja de seguridad del producto que va a usar? Si aplica.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_13" value="SI" checked>
                    <input type="radio" name="ch_13" value="NO" >
                    <input type="radio" name="ch_13" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se conoce el plan de emergencia de la empresa?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_14" value="SI" checked>
                    <input type="radio" name="ch_14" value="NO" >
                    <input type="radio" name="ch_14" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Cuenta con los medios de comunicación y los teléfonos de contacto en caso de emergencia?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_15" value="SI" checked>
                    <input type="radio" name="ch_15" value="NO" >
                    <input type="radio" name="ch_15" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Cuenta con todos los elementos y o equipos de emergencia que se definieron según los riesgos identificados (Botiquines, extintores, camillas, otros)?						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_16" value="SI" checked>
                    <input type="radio" name="ch_16" value="NO" >
                    <input type="radio" name="ch_16" value="N/A" >    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se tiene contemplado un plan de rescate.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                    <input type="radio" name="ch_17" value="SI" checked>
                    <input type="radio" name="ch_17" value="NO" >
                    <input type="radio" name="ch_17" value="N/A" >    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 border border-secondary bg-info text-white">
                    Los ejecutantes declaramos que hemos participado en el diligenciamiento de esta lista de chequeo,  entendemos y estamos de acuerdo con su contenido.																											
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-9 border border-secondary d-flex justify-content-around align-items-center">
                    NOMBRES  PERSONAL EJECUTANTE				
                </div>
                <div class="col-sm-3 border border-secondary">
                    <div class="row">
                        <div class="col-sm-12 border border-secondary">
                            EPP   OK	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 border border-secondary">
                            SI
                        </div>
                        <div class="col-sm-6 border border-secondary">
                            NO
                        </div>
                    </div>
                </div>
                    <!-- <div class="col-sm-3 border border-secondary d-flex justify-content-around align-items-center">
                        FIRMA
                    </div> -->
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    <select class="form-control form-control-sm" id="per_01">
                        <option value="A">Integrante...</option>
                        <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                      </select>
                </div>
                <div class="col-sm-3 border border-secondary d-flex justify-content-around align-items-center">
                    <input type="radio" name="per_01" value="SI" checked>
                    <input type="radio" name="per_01" value="NO" >
                </div>
                <!-- <div class="col-sm-3 border border-secondary">

                </div> -->
            </div>

            <div class="row text-center bg-info text-white">
                <div class="col-sm-9 border border-secondary">
                    CONTROL FINAL DEL TRABAJO						
                </div>
                <div class="col-sm-3 border border-secondary">
                    <div class="row">
                        <div class="col-sm-4 border border-secondary">SI</div>
                        <div class="col-sm-4 border border-secondary">NO</div>
                        <div class="col-sm-4 border border-secondary">N/A</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    El lugar y equipo quedan en condiciones seguras.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                     <input type="radio" name="cr_01" value="SI" checked>
                     <input type="radio" name="cr_01" value="NO" >
                     <input type="radio" name="cr_01" value="N/A" >   
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    El área queda limpia y libre de desechos y materiales						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                     <input type="radio" name="cr_02" value="SI" checked>
                     <input type="radio" name="cr_02" value="NO" >
                     <input type="radio" name="cr_02" value="N/A" >   
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Las energias aisladas quedan reestablecidas.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                     <input type="radio" name="cr_03" value="SI" checked>
                     <input type="radio" name="cr_03" value="NO" >
                     <input type="radio" name="cr_03" value="N/A" >   
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 border border-secondary">
                    Se realizan las pruebas de control de trabajo necesarias.						
                </div>
                <div class="col-sm-3 d-flex justify-content-around align-items-center border border-secondary">
                     <input type="radio" name="cr_04" value="SI" checked>
                     <input type="radio" name="cr_04" value="NO" >
                     <input type="radio" name="cr_04" value="N/A" >   
                </div>
            </div>

            <div class="row border-secondary border">
                <div class="col-sm-12">
                    <label for="">OBSERVACIONES</label>
                    <textarea class="form-control" id="observaciones" rows="1" placeholder="alguna observacion?..."></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 border-secondary border">
                    <div class="row">
                        <div class="col-sm-4">LIDER DE TRABAJO:</div>
                        <div class="col-sm-8">
                            <select class="form-control form-control-sm" id="lider_2">
                                <option value="A">Lider...</option>
                                <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                                    <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                                <?php endwhile; ?>
                              </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 border-secondary border">
                    <div class="row">
                        <div class="col-sm-6">FIRMA:</div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row mt-2">
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