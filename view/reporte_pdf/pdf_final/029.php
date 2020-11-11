<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  

        $consulta="SELECT * FROM sgi_f_029 JOIN sgi_f_029_preguntas ON sgi_f_029_preguntas.id_029_principal = sgi_f_029.id_029_principal WHERE sgi_f_029.id_029_principal = '2'";
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

<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  border:1px solid #dee2e6
}
html{
    font-family: Helvetica;
}

</style>
<body>

    <div class="contenedor">
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
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver1[0] ?>.png" width="100px" alt=""></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver2[0] ?>.png" width="100px" alt=""></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver3[0] ?>.png" width="100px" alt=""></td>
                <td style="text-align: center;"><img src="http://192.168.1.79/telematica/view/media/firmas/<?php echo $ver4[0] ?>.png" width="100px" alt=""></td>
            </tr>
            <tr>
                <td colspan="7"><strong>OBSERVACIONES: </strong><?php echo $datos_029['observaciones']; ?></td>
            </tr>
        </table>


    </div>
    
</body>
</html>