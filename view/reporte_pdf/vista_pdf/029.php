<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 029</title>
    <link rel="icon" type="image/png" href="../../media/photos/logo.ico" />
    <?php require_once "../../../model/conexion.php"; 
          require_once "../../libraries/lib.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $consulta="SELECT * FROM sgi_f_029 JOIN sgi_f_029_preguntas ON sgi_f_029_preguntas.id_029_principal = sgi_f_029.id_029_principal WHERE sgi_f_029.id_029_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_029=mysqli_fetch_assoc($result);

        $sql="SELECT firma FROM sgi_f_029_preguntas JOIN usuarios ON usuarios.id_user = sgi_f_029_preguntas.revisado_per_1 WHERE id_029_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT firma FROM sgi_f_029_preguntas JOIN usuarios ON usuarios.id_user = sgi_f_029_preguntas.revisado_per_2 WHERE id_029_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT firma FROM sgi_f_029_preguntas JOIN usuarios ON usuarios.id_user = sgi_f_029_preguntas.revisado_per_3 WHERE id_029_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
        $sql3="SELECT firma FROM sgi_f_029_preguntas JOIN usuarios ON usuarios.id_user = sgi_f_029_preguntas.revisado_per_4 WHERE id_029_principal = '$id_del_formato_recuperado'";
        $result3=mysqli_query($conexion,$sql3); $ver3=mysqli_fetch_row($result3);
        $sql4="SELECT firma FROM sgi_f_029_preguntas JOIN usuarios ON usuarios.id_user = sgi_f_029_preguntas.revisado_per_5 WHERE id_029_principal = '$id_del_formato_recuperado'";
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
    
                    <h2>VISTA SGI_F_029</h2>
                    
                    <a href="../../../model/generador_pdf/029.php?id_formato=<?php echo $id_del_formato_recuperado ?>" class="btn btn-sm btn-warning" onclick="agregar_informe()">Descargar Informe
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
        <td>Código: SGI F 02</td>
        </tr>

        <tr><td>Revisado: Septiembre 2020</td></tr>
        <tr><td>Versión: 01</td></tr>
        </table>

        <table border="1" style="width: 100%;">
        <tr>
            <td colspan="4">Actividad: <?php echo $datos_029['actividad']; ?></td>
            <td colspan="3">Fecha: <?php echo $datos_029['fecha']; ?></td>
        </tr>
        <tr>
            <td colspan="7">X cuando el elemento este en mal estado, OK cuando el elemento se encuentre operativo y en buen estado, N/A cuando no haga parte del equipo</td>
        </tr>
        <tr>
            <td colspan="7" style="text-align: center; background-color:#17a2b8!important; color: white;">ARNES</td>
        </tr>
        <tr>
            <td colspan="2">APROBACIÓN LIDER ACTIVIDAD</td>
            <td colspan="5" style="text-align: center; background-color:#17a2b8!important; color: white;">SERIAL ARNES</td>
        </tr>
        <tr>
            <td rowspan="3" colspan="2" style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[0] ?>.png" width="220px" alt=""></td>
            <td style="text-align: center; background-color:#b6dbe0!important; color: black;"><?php echo $datos_029['s_arnes_1']; ?></td>
            <td style="text-align: center; background-color:#b6dbe0!important; color: black;"><?php echo $datos_029['s_arnes_2']; ?></td>
            <td style="text-align: center; background-color:#b6dbe0!important; color: black;"><?php echo $datos_029['s_arnes_3']; ?></td>
            <td style="text-align: center; background-color:#b6dbe0!important; color: black;"><?php echo $datos_029['s_arnes_4']; ?></td>
            <td style="text-align: center; background-color:#b6dbe0!important; color: black;"><?php echo $datos_029['s_arnes_5']; ?></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align: center; background-color:#17a2b8!important; color: white;">FECHA FABRICACIÓN</td>
        </tr>
        <tr style="text-align: center; background-color:#b6dbe0!important; color: black;">
            <td><?php echo $datos_029['f_fabricacion_1']; ?></td>
            <td><?php echo $datos_029['f_fabricacion_2']; ?></td>
            <td><?php echo $datos_029['f_fabricacion_3']; ?></td>
            <td><?php echo $datos_029['f_fabricacion_4']; ?></td>
            <td><?php echo $datos_029['f_fabricacion_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Reatas de hombros</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_1_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_1_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_1_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_1_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_1_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">Reatas  de muslos</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_2_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_2_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_2_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_2_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_2_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">Reatas Subpélvica</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_3_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_3_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_3_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_3_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_3_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;">Costuras</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_4_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_4_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_4_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_4_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_4_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">5</td>
            <td style="text-align: center;">Etiquetas</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_5_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_5_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_5_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_5_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_5_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">6</td>
            <td style="text-align: center;">Indicador de impacto</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_6_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_6_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_6_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_6_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_6_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">7</td>
            <td style="text-align: center;">Anillo en D, dorsal</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_7_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_7_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_7_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_7_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_7_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">8</td>
            <td style="text-align: center;">Anillo en D, pectoral</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_8_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_8_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_8_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_8_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_8_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">9</td>
            <td style="text-align: center;">Anillo en D, laterales</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_9_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_9_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_9_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_9_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_9_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">10</td>
            <td style="text-align: center;">Anillo en D, ventral</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_10_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_10_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_10_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_10_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_10_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">11</td>
            <td style="text-align: center;">Hebillas pasantes</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_11_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_11_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_11_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_11_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_11_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">12</td>
            <td style="text-align: center;">Hebillas de ajuste</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_12_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_12_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_12_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_12_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_12_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">13</td>
            <td style="text-align: center;">Hebillas de conexión </td>
            <td style="text-align: center;"><?php echo $datos_029['pre_13_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_13_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_13_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_13_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_13_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">Guía para correa dorsal</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_14_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_14_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_14_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_14_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_14_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">15</td>
            <td style="text-align: center;">Guía para correa pectoral</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_15_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_15_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_15_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_15_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_15_per_5']; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">16</td>
            <td style="text-align: center;">Faja lumbar</td>
            <td style="text-align: center;"><?php echo $datos_029['pre_16_per_1']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_16_per_2']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_16_per_3']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_16_per_4']; ?></td>
            <td style="text-align: center;"><?php echo $datos_029['pre_16_per_5']; ?></td>
        </tr>

        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="7">ESLINGAS</td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="2" rowspan="4">ESLINGA Y</td>
                <td colspan="5">SERIAL</td>
            </tr>
            <tr style="text-align: center; background-color:#b6dbe0!important; color: black;">
                <td><?php echo $datos_029['s_eslinga_y_1']; ?></td>
                <td><?php echo $datos_029['s_eslinga_y_2']; ?></td>
                <td><?php echo $datos_029['s_eslinga_y_3']; ?></td>
                <td><?php echo $datos_029['s_eslinga_y_4']; ?></td>
                <td><?php echo $datos_029['s_eslinga_y_5']; ?></td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center; background-color:#17a2b8!important; color: white;">FECHA FABRICACIÓN</td>
            </tr>
            <tr style="text-align: center; background-color:#b6dbe0!important; color: black;">
                <td><?php echo $datos_029['f_eslinga_y_1']; ?></td>
                <td><?php echo $datos_029['f_eslinga_y_2']; ?></td>
                <td><?php echo $datos_029['f_eslinga_y_3']; ?></td>
                <td><?php echo $datos_029['f_eslinga_y_4']; ?></td>
                <td><?php echo $datos_029['f_eslinga_y_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">17</td>
                <td style="text-align: center;">Ganchos con cierre automático doble seguridad</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_17_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_17_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_17_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_17_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_17_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">18</td>
                <td style="text-align: center;">Hebillas de ajuste</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_18_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_18_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_18_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_18_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_18_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">19</td>
                <td style="text-align: center;">Absorbedor de energía</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_19_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_19_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_19_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_19_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_19_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">20</td>
                <td style="text-align: center;">Reatas y costuras</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_20_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_20_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_20_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_20_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_20_per_5']; ?></td>
            </tr>
            
        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="2" rowspan="4">ESLINGA POSICIONAMIENTO</td>
                <td colspan="5">SERIAL</td>
            </tr>
            <tr style="text-align: center; background-color:#b6dbe0!important; color: black;">
                <td><?php echo $datos_029['s_eslinga_pos_1']; ?></td>
                <td><?php echo $datos_029['s_eslinga_pos_2']; ?></td>
                <td><?php echo $datos_029['s_eslinga_pos_3']; ?></td>
                <td><?php echo $datos_029['s_eslinga_pos_4']; ?></td>
                <td><?php echo $datos_029['s_eslinga_pos_5']; ?></td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center; background-color:#17a2b8!important; color: white;">FECHA FABRICACIÓN</td>
            </tr>
            <tr style="text-align: center; background-color:#b6dbe0!important; color: black;">
                <td><?php echo $datos_029['f_eslinga_pos_1']; ?></td>
                <td><?php echo $datos_029['f_eslinga_pos_2']; ?></td>
                <td><?php echo $datos_029['f_eslinga_pos_3']; ?></td>
                <td><?php echo $datos_029['f_eslinga_pos_4']; ?></td>
                <td><?php echo $datos_029['f_eslinga_pos_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">21</td>
                <td style="text-align: center;">Ganchos con cierre automático doble seguridad</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_21_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_21_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_21_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_21_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_21_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">22</td>
                <td style="text-align: center;">Hebillas de ajuste</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_22_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_22_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_22_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_22_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_22_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">23</td>
                <td style="text-align: center;">Absorbedor de energía</td>
                <td style="text-align: center;"><?php echo $datos_029['pre_23_per_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_23_per_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_23_per_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_23_per_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_029['pre_23_per_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2">REVISADO POR:</td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver[0] ?>.png" width="100px" alt=""></td>
                <td style="text-align: center;"><?php if(isset($ver1[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver1[0] ?>.png" width="100px" alt=""><?php }?></td>
                <td style="text-align: center;"><?php if(isset($ver2[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver2[0] ?>.png" width="100px" alt=""><?php }?></td>
                <td style="text-align: center;"><?php if(isset($ver3[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver3[0] ?>.png" width="100px" alt=""><?php }?></td>
                <td style="text-align: center;"><?php if(isset($ver4[0])){ ?><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver4[0] ?>.png" width="100px" alt=""><?php }?></td>
            </tr>
            <tr>
                <td colspan="7"><strong>OBSERVACIONES: </strong><?php echo $datos_029['observaciones']; ?></td>
            </tr>
        </table>


    </div>
</body>
</html>