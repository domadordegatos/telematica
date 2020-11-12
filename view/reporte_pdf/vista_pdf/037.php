<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 037</title>
    <link rel="icon" type="image/png" href="../../media/photos/logo.ico" />
    <?php require_once "../../../model/conexion.php"; 
          require_once "../../libraries/lib.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $consulta="SELECT * FROM sgi_f_037 JOIN sgi_f_037_items ON sgi_f_037_items.id_principal = sgi_f_037.id_037_principal WHERE id_037_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_037=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, usuarios.firma FROM sgi_f_037 JOIN usuarios ON usuarios.id_user = sgi_f_037.revisado JOIN cargos ON cargos.id_cargo = usuarios.cargo
		WHERE id_037_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
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
    
                    <h2>VISTA SGI_F_037</h2>
                    
                    <a href="../../../model/generador_pdf/037.php?id_formato=<?php echo $id_del_formato_recuperado ?>" class="btn btn-sm btn-warning" onclick="agregar_informe()">Descargar Informe
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
        <td ROWSPAN="3" style="text-align: center;">INSPECCIÓN DE HERRAMIENTA CAMPO</td>
        <td>Código: SGI F 037</td>
        </tr>

        <tr><td>Revisado: Mayo 2020</td></tr>
        <tr><td>Versión: 02</td></tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr>
                <td colspan="3" style="text-align: center; background-color:#17a2b8!important; color: white;">DATOS GENERALES</td>
            </tr>
            <tr>
                <td>FECHA: <?php echo $datos_037['fecha']; ?></td>
                <td>LUGAR: <?php echo $datos_037['lugar']; ?></td>
                <td>No: <?php echo $datos_037['numero']; ?></td>
            </tr>
        </table>
        
        <table border="1" style="width: 100%;">
            <tr style="background-color:#17a2b8!important; color: white;">
                <td rowspan="2" style="text-align: center;">ITEM</td>
                <td rowspan="2" style="text-align: center;">HERRAMIENTA</td>
                <td rowspan="2" style="text-align: center;">CANTIDAD</td>
                <td colspan="2" style="text-align: center;">ESTADO</td>
            </tr>
            <tr style="background-color:#17a2b8!important; color: white;">
                <td style="text-align: center;">B</td>
                <td style="text-align: center;">M</td>
            </tr>
            <tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_1']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_1'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr>

            <?php if($datos_037['it_2'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_2']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_2'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_3'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_3']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_3'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_4'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_4']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_4'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_5'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_5']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_5']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_5'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_6'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_6']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_6']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_6'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_7'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_7']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_7']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_7'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_8'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_8']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_8']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_8'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_9'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_9']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_9']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_9'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_10'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_10']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_10']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_10'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_11'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_11']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_11']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_11'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_12'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_12']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_12']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_12'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_13'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_13']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_13']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_13'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_14'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_14']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_14']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_14'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_15'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_15']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_15']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_15'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_16'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_16']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_16']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_16'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_17'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_17']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_17']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_17'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_18'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_18']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_18']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_18'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_19'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_19']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_19']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_19'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_20'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_20']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_20']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_20'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_21'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_21']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_21']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_21'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_22'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_22']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_22']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_22'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_23'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_23']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_23']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_23'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_24'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_24']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_24']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_24'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_25'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_25']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_25']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_25'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_26'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_26']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_26']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_26'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_27'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_27']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_27']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_27'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_28'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_28']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_28']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_28'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_29'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_29']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_29']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_29'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

            <?php if($datos_037['it_30'] != ''){ ?><tr>
                <td style="text-align: center;">1</td>
                <td><?php echo $datos_037['it_30']; ?></td>
                <td style="text-align: center;"><?php echo $datos_037['ic_30']; ?></td>
                <td style="text-align: center;" colspan="2"><?php if($datos_037['ie_30'] == 'B'){ echo "BUENO"; }else{ echo "MALO"; } ?></td>
            </tr><?php } ?>

        <tr>
            <td colspan="5"><strong>OBSERVACIONES: </strong><?php echo $datos_037['observaciones']; ?></td>
        </tr>
        </table>
        
        <table border="1" style="width: 100%;">
            <tr style="background-color:#17a2b8!important; color: white;">
                <td style="text-align: center;">PARTE DE LA HERRAMIENTA</td>
                <td style="text-align: center;" colspan="2">CRITERIOS DE VERIFICICACIÓN</td>
            </tr>
            <tr>
                <td>Sujetadores o mangos de angarre</td>
                <td colspan="2">Verifique que se encuentren en buen estado, si son de madera que no presenten fisura o astillamiento
                    deben estar perfectamente acoplados y solidamente fijados a la herramienta, si son en pasta o plasticos deben ser 
                    antideslizante. Libres de suciedad o residuos de aceite.</td>
            </tr>
            <tr>
                <td>Puntas o cabezas metalicas</td>
                <td colspan="2">Caras planas, que no presenten oxido, rebabas o limaduras, si se presentan tornillos o amortiguadores de
                    articulacion, este debe ser lubricado o engrasado periodicamente, libres de suciedad o residuos de aceite.</td>
            </tr>
            <tr>
                <td>Herramienta manual para trabajo con electricidad</td>
                <td colspan="2">Deben tener aislamientos / coberturas libre de fallas o cortaduras, estos deben cumplir con la norma
                    IEC 60900 y ASTM 1505-97</td>
            </tr>
            <tr style="background-color:#17a2b8!important; color: white;">
                <td>REVISADO POR:</td>
                <td>CARGO:</td>
                <td>FIRMA:</td>
            </tr>
            <tr>
                <td><?php echo $ver[0]." ".$ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[3] ?>.png" width="150px" alt=""></td>
            </tr>
        </table>


    </div>
</body>
</html>