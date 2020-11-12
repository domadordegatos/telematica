<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 065</title>
    <link rel="icon" type="image/png" href="../../media/photos/logo.ico" />
    <?php require_once "../../../model/conexion.php"; 
          require_once "../../libraries/lib.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $consulta="SELECT * FROM sgi_f_065 JOIN sgi_f_065_especificacion ON sgi_f_065_especificacion.id_principal = sgi_f_065.id_065_principal WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_065=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_065 JOIN usuarios ON usuarios.id_user = sgi_f_065.lider_1 WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_065 JOIN usuarios ON usuarios.id_user = sgi_f_065.integrante2 WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_065 JOIN usuarios ON usuarios.id_user = sgi_f_065.integrante3 WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
        $sql3="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_065 JOIN usuarios ON usuarios.id_user = sgi_f_065.integrante4 WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result3=mysqli_query($conexion,$sql3); $ver3=mysqli_fetch_row($result3);
        $sql4="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_065 JOIN usuarios ON usuarios.id_user = sgi_f_065.integrante5 WHERE id_065_principal = '$id_del_formato_recuperado'";
        $result4=mysqli_query($conexion,$sql4); $ver4=mysqli_fetch_row($result4);
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
    
                    <h2>VISTA SGI_F_065</h2>
                    
                    <a href="../../../model/generador_pdf/065.php?id_formato=<?php echo $id_del_formato_recuperado ?>" class="btn btn-sm btn-warning" onclick="agregar_informe()">Descargar Informe
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z"/>
                            <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z"/>
                            <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                          </svg>
                    </a>  
        </div>
    </div>

    <div class="contenedor mx-5 mt-3">
    <table BORDER="1" style="width: 100%;">
        <tr>
        <td ROWSPAN="3"><img src="https://i.ibb.co/QkvsddH/t-white.png" width="25%" alt=""></td>
        <td ROWSPAN="3" style="text-align: center;">LISTA DE CHEQUEO PARA TRABAJOS</td>
        <td>Código: SGI F 065</td>
        </tr>

        <tr><td>Revisado: Mayo 2020</td></tr>
        <tr><td>Versión: 01</td></tr>
        </table>

        <table border="1" style="width: 100%;">
        <tr>
            <td colspan="2" style="text-align: center; background-color:#17a2b8!important; color: white;">LISTA DE CHEQUEO PARA TRABAJOS (LLENAR EN LA CHARLA DE 5 MINUTOS POR TODOS LOS EJECUTANTES)</td>
        </tr>
        <tr>
            <td colspan="2">SITIO DE TRABAJO: <?php echo $datos_065['lugar']; ?></td>
        </tr>
        <tr>
            <td colspan="2">LIDER DELT TRABAJO: <?php echo $ver[0]." ".$ver[1] ?></td>
        </tr>
        <tr>
            <td>EN EMERGENCIA CONTACTAR A NOMBER: <?php echo $datos_065['acudiente']; ?></td>
            <td>TEL: <?php echo $datos_065['telefono']; ?></td>
        </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="background-color:#17a2b8!important; color: white;">
                <td colspan="4" style="text-align: center;">DESCRIPCION DEL TRABAJO A REALIZAR</td>
            </tr>
            <tr><td><?php echo $datos_065['descripcion']; ?></td></tr>

            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td rowspan="2">EVALUACION ANTES DE INICIAR LA TAREA</td>
                <td colspan="3">VERIFICACIÓN</td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td>SI</td>
                <td>NO</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td>¿Cuenta con un procedimiento de trabajo definido, lo conoce y entiende ?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_1']; ?></td>
            </tr>
            <tr>
                <td>Reportaron su llegada al sitio y coordinaron con la autoridad de área?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_2']; ?></td>
            </tr>
            <tr>
                <td> ¿ Definieron las necesidades de señalizacion y demarcacion?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_3']; ?></td>
            </tr>
            <tr>
                <td>Se cuenta con los elementos necesarios para la señalización del área?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_4']; ?></td>
            </tr>
            <tr>
                <td>Se requieren Aislamientos electricos mecanicos o de proceso?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_5']; ?></td>
            </tr>
            <tr>
                <td>Se realizaron los aislamientos?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_6']; ?></td>
            </tr>
            <tr>
                <td>Se revisó el área, se identificaron condiciones peligrosas (Obstrucciones, objetos que golpeen, escaleras, huecos, insectos, ofidios otros).	</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_7']; ?></td>
            </tr>
            <tr>
                <td>Estan previstos los controles para mitigar los riesgos identificados en el área?	</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_8']; ?></td>
            </tr>
            <tr>
                <td>Existe alguna condicion de riesgo identificada sin un control?	</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_9']; ?></td>
            </tr>
            <tr>
                <td>Se cuenta con elementos  y herramientas adecuadas para el trabajo?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_10']; ?></td>
            </tr>
            <tr>
                <td>En caso de trabajos en altura,  La herramienta de mano se carga de forma segura?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_11']; ?></td>
            </tr>
            <tr>
                <td>En caso de trabajos con productos quimicos, conoce el procedimiento de manejo del producto? Si aplica.</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_12']; ?></td>
            </tr>
            <tr>
                <td>Se conoce el plan de emergencia de la empresa?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_13']; ?></td>
            </tr>
            <tr>
                <td>Cuenta con los medios de comunicación y los teléfonos de contacto en caso de emergencia?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_14']; ?></td>
            </tr>
            <tr>
                <td>Cuenta con todos los elementos y o equipos de emergencia que se definieron según los riesgos identificados (Botiquines, extintores, camillas, otros)?</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_15']; ?></td>
            </tr>
            <tr>
                <td>Se tiene contemplado un plan de rescate.</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_16']; ?></td>
            </tr>
            <tr>
                <td>Los ejecutantes declaramos que hemos participado en el diligenciamiento de esta lista de chequeo,  entendemos y estamos de acuerdo con su contenido.</td>
                <td colspan="3" style="text-align: center;"><?php echo $datos_065['pregunta_17']; ?></td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td rowspan="2">NOMBRES  PERSONAL EJECUTANTE</td>
                <td colspan="2">EPP OK</td>
                <td rowspan="2">FIRMA</td>
            </tr style="text-align: center;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td style="background-color:#17a2b8!important; color: white; text-align: center;">SI</td>
                <td style="background-color:#17a2b8!important; color: white; text-align: center;">NO</td>
            </tr>
            <tr>
                <td><?php echo $ver[0]." ".$ver[1] ?></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_065['epp1']; ?></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[2] ?>.png" width="100px" alt=""></td>
            </tr>
            <?php if($ver1 != ''){ ?><tr>
                <td><?php echo $ver1[0]." ".$ver1[1] ?></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_065['epp2']; ?></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver1[2] ?>.png" width="100px" alt=""></td>
            </tr><?php } ?>
            <?php if($ver2 != ''){ ?><tr>
                <td><?php echo $ver2[0]." ".$ver2[1] ?></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_065['epp3']; ?></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver2[2] ?>.png" width="100px" alt=""></td>
            </tr><?php } ?>
            <?php if($ver3 != ''){ ?><tr>
                <td><?php echo $ver3[0]." ".$ver3[1] ?></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_065['epp4']; ?></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver3[2] ?>.png" width="100px" alt=""></td>
            </tr><?php } ?>
            <?php if($ver4 != ''){ ?><tr>
                <td><?php echo $ver4[0]." ".$ver4[1] ?></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_065['epp5']; ?></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver4[2] ?>.png" width="100px" alt=""></td>
            </tr><?php } ?>
        </table>

        <table border="1" style="width: 100%;">
                <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                    <td>CONTROL FINAL DEL TRABAJO</td>
                    <td>SI</td>
                    <td>NO</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>El lugar y equipo quedan en condiciones seguras.</td>
                    <td colspan="3" style="text-align: center;"><?php echo $datos_065['control_1']; ?></td>
                </tr>
                <tr>
                    <td>El área queda limpia y libre de desechos y materiales</td>
                    <td colspan="3" style="text-align: center;"><?php echo $datos_065['control_2']; ?></td>
                </tr>
                <tr>
                    <td>Las energias aisladas quedan reestablecidas.</td>
                    <td colspan="3" style="text-align: center;"><?php echo $datos_065['control_3']; ?></td>
                </tr>
                <tr>
                    <td>Se realizan las pruebas de control de trabajo necesarias.</td>
                    <td colspan="3" style="text-align: center;"><?php echo $datos_065['control_4']; ?></td>
                </tr>
                <tr>
                    <td colspan="4"><strong>OBSERVACIONES: </strong><?php echo $datos_065['observaciones']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>LIDER DEL TRABAJO NOMBRE: <?php echo $ver[0]." ".$ver[1] ?></strong></td>
                    <td colspan="2"><strong>FIRMA: </strong><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[2] ?>.png" width="100px" alt=""></td>
                </tr>
        </table>


    </div>
</body>
</html>