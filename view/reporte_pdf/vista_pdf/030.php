<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 030</title>
    <link rel="icon" type="image/png" href="../../media/photos/logo.ico" />
    <?php require_once "../../../model/conexion.php"; 
          require_once "../../libraries/lib.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $consulta="SELECT * FROM sgi_f_030 
        JOIN sgi_f_030_especificacion ON sgi_f_030_especificacion.id_sgi_principal = sgi_f_030.id_030_principal
        JOIN sgi_f_030_estado ON sgi_f_030_estado.id_sgi_principal = sgi_f_030.id_030_principal WHERE id_030_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_030=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.inspector WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.rescatista WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT usuarios.lastnames, usuarios.`names`, usuarios.firma FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.apoyo_piso WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
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
    
                    <h2>VISTA SGI_F_030</h2>
                    
                    <a href="../../../model/generador_pdf/030.php?id_formato=<?php echo $id_del_formato_recuperado ?>" class="btn btn-sm btn-warning" onclick="agregar_informe()">Descargar Informe
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
        <td ROWSPAN="3" style="text-align: center;">LISTA DE CHEQUEO PARA INSPECCION KIT DE RESCATE</td>
        <td>Código: SGI F 030</td>
        </tr>

        <tr><td>Revisado: Mayo 2020</td></tr>
        <tr><td>Versión: 02</td></tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr>
                <td colspan="1">ACTIVIDAD:</td>
                <td colspan="3"><?php echo $datos_030['actividad']; ?></td>
            </tr>
            <tr>
                <td>FECHA: <?php echo $datos_030['fecha']; ?></td>
                <td>INSPECCIONADO POR: <?php echo $ver[0]." ".$ver[1] ?></td>
                <td colspan="2">FIRMA: <img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[2] ?>.png" width="120px" alt=""></td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="background-color:#17a2b8!important; color: white;">
                <td rowspan="2" colspan="4"><strong>ESTADO DEL EQUIPO</strong> Verificar costuras y tejidos trenzados, elementos metalicos libres de oxidación, rotos o deformados)</td>
                <td colspan="4" style="text-align: center;">ESTADO</td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;"><td colspan="2">BUENO</td><td colspan="2">MALO</td></tr>

            <tr>
                <td rowspan="6" colspan="2" style="text-align: center;">TIE OFF</td>
                <td colspan="2">SERIE: <?php echo $datos_030['tie_1_s']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_1'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['tie_1_m']; ?></td>
            </tr>
            <tr>
                <td colspan="2">SERIE: <?php echo $datos_030['tie_2_s']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_2'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['tie_2_m']; ?></td>
            </tr>
            <tr>
                <td colspan="2">SERIE: <?php echo $datos_030['tie_3_s']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_3'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['tie_3_m']; ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="3" colspan="2" style="text-align: center;">POLEAS DOBLES</td>
                <td colspan="2">CAPACIDAD: <?php echo $datos_030['polea_doble_cap_1']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_4'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">CAPACIDAD: <?php echo $datos_030['polea_doble_cap_2']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_5'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">CAPACIDAD: <?php echo $datos_030['polea_doble_cap_3']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_6'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="2" colspan="2" style="text-align: center;">POLEAS SENCILLA</td>
                <td colspan="2">CAPACIDAD: <?php echo $datos_030['polea_sencilla_cap_1']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_7'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">CAPACIDAD: <?php echo $datos_030['polea_sencilla_cap_2']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_8'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <!-- DESCENDEDOR -->
            <tr>
                <td rowspan="2" colspan="2" style="text-align: center;">DESCENDEDOR</td>
                <td colspan="2">SERIE: <?php echo $datos_030['descendedor_1']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_9'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">SERIE: <?php echo $datos_030['descendedor_2']; ?></td>
                <td colspan="4" style="text-align: center;"><?php if($datos_030['estado_10'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="2" colspan="2" style="text-align: center;">BLOQUEADOR (GIBB)</td>
                <td colspan="2">SERIE: <?php echo $datos_030['bloqueador_serie']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_11'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['bloqueador_marca']; ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="" colspan="2" style="text-align: center;">MOSQUETONES</td>
                <td colspan="2">CANTIDAD: <?php echo $datos_030['mosqueton']; ?></td>
                <td colspan="4" rowspan="" style="text-align: center;"><?php if($datos_030['estado_12'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="6" colspan="2" style="text-align: center;">ARRESTADOR</td>
                <td colspan="2">SERIE: <?php echo $datos_030['arrestador_s_1']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_13'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['arrestador_m_1']; ?></td>
            </tr>
            <tr>
                <td colspan="2">SERIE: <?php echo $datos_030['arrestador_s_2']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_14'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['arrestador_m_2']; ?></td>
            </tr>
            <tr>
                <td colspan="2">SERIE: <?php echo $datos_030['arrestador_s_3']; ?></td>
                <td colspan="4" rowspan="2" style="text-align: center;"><?php if($datos_030['estado_15'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2">MARCA: <?php echo $datos_030['arrestador_m_3']; ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="" colspan="2" style="text-align: center;">CUERDA ESTATICA</td>
                <td colspan="2">METROS: <?php echo $datos_030['cuerda_estatica']; ?></td>
                <td colspan="4" rowspan="" style="text-align: center;"><?php if($datos_030['estado_16'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <!--  -->
            <tr>
                <td rowspan="" colspan="2" style="text-align: center;">CUERDA AUXILIAR</td>
                <td colspan="2">METROS: <?php echo $datos_030['cuerda_auxiliar']; ?></td>
                <td colspan="4" rowspan="" style="text-align: center;"><?php if($datos_030['estado_17'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td rowspan="2" colspan="2" style="text-align: center;">ACCESORIOS ADICIONALES</td>
                <td colspan="2"><?php echo $datos_030['accesorio_1']; ?></td>
                <td colspan="4" rowspan="" style="text-align: center;"><?php if($datos_030['estado_18'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $datos_030['accesorio_2']; ?></td>
                <td colspan="4" rowspan="" style="text-align: center;"><?php if($datos_030['estado_19'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>
        </table>

        <table style="width: 100%;" border="1">
            <tr>
                <td rowspan="1" style="background-color:#17a2b8!important; color: white; text-align: center;">RESCATISTA</td>
                <td><?php if(isset($ver1[0])){ ?><?php echo $ver1[0]." ".$ver1[1] ?> <?php } ?></td>
                <td><?php if(isset($ver1[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver1[2] ?>.png" width="110px" alt=""> <?php } ?></td>
                <td><strong>CIERRE DE HALLAZGOS ENCONTRADOS: </strong><?php if($datos_030['hallazgos'] == 'Y'){ echo "SI"; } else if($datos_030['hallazgos'] == 'N'){ echo "NO"; } else { echo "NO APLICA"; } ?></td>
            </tr>
            <tr>
                <td rowspan="" style="background-color:#17a2b8!important; color: white; text-align: center;">APOYO EN PISO</td>
                <td><?php if(isset($ver2[0])){ ?><?php echo $ver2[0]." ".$ver2[1] ?><?php } ?></td>
                <td><?php if(isset($ver2[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver2[2] ?>.png" width="110px" alt=""><?php } ?></td>
                <td rowspan="">FECHA DE CIERRE: <?php echo $datos_030['fecha_cierre']; ?></td>
            </tr>
        </table>



    </div>
</body>
</html>