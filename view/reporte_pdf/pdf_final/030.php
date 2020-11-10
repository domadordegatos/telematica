<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  

        $consulta="SELECT * FROM sgi_f_030 
        JOIN sgi_f_030_especificacion ON sgi_f_030_especificacion.id_sgi_principal = sgi_f_030.id_030_principal
        JOIN sgi_f_030_estado ON sgi_f_030_estado.id_sgi_principal = sgi_f_030.id_030_principal WHERE id_030_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_030=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names` FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.inspector WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT usuarios.lastnames, usuarios.`names` FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.rescatista WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT usuarios.lastnames, usuarios.`names` FROM sgi_f_030 JOIN usuarios ON usuarios.id_user = sgi_f_030.apoyo_piso WHERE sgi_f_030.id_030_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
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
        <td>Código: SGI F 030</td>
        </tr>

        <tr><td>Revisado: Mayo 2019</td></tr>
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
                <td colspan="2">FIRMA: </td>
            </tr>
        </table>

        <table border="1">
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
                <td rowspan="2" style="background-color:#17a2b8!important; color: white; text-align: center;">RESCATISTA</td>
                <td><?php echo $ver1[0]." ".$ver1[1] ?></td>
                <td>FIRMA</td>
                <td><strong>CIERRE DE HALLAZGOS ENCONTRADOS</strong></td>
            </tr>
            <tr>
                <td>NOMBRE</td>
                <td>FIRMA</td>
                <td><?php if($datos_030['hallazgos'] == 'Y'){ echo "SI"; } else if($datos_030['hallazgos'] == 'N'){ echo "NO"; } else { echo "NO APLICA"; } ?></td>
            </tr>
            <tr>
                <td rowspan="2" style="background-color:#17a2b8!important; color: white; text-align: center;">APOYO EN PISO</td>
                <td><?php echo $ver2[0]." ".$ver2[1] ?></td>
                <td>FIRMA</td>
                <td rowspan="2">FECHA DE CIERRE: <?php echo $datos_030['fecha_cierre']; ?></td>
            </tr>
            <tr>
                <td>NOMBRE</td>
                <td>FIRMA</td>
            </tr>
        </table>



    </div>
    
</body>
</html>