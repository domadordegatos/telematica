<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  
          $value = $id_del_formato_recuperado;

        $consulta="SELECT th_f_002.id_th_f_002,
                          th_f_002.asunto,
                          th_f_002.lugar,
                          th_f_002.permiso,
                          th_f_002.contenido,
                          th_f_002.fecha,
                          th_f_002.hora_i,
                          th_f_002.hora_f,
                          usuarios.`names`,
                          usuarios.lastnames
                          FROM th_f_002
                          JOIN usuarios ON usuarios.id_user = th_f_002.instructor
                          WHERE th_f_002.id_th_f_002 = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta);
        $datos_th_f_002=mysqli_fetch_assoc($result);
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
        <td ROWSPAN="3" style="text-align: center;">FORMATO DE CAPACITACIÓN / CHARLA / REUNIÓN /DIVULGACIÓN</td>
        <td>Código: TH F 002</td>
        </tr>

        <tr><td>Revisado: Septiembre 2020</td></tr>
        <tr><td>Versión: 02</td></tr>
        </table>
        
        <table border="1" style="margin-top: 10px; width: 100%;">
        <tr style="text-align: center;">
            <td colspan="4"><?php if($datos_th_f_002['asunto'] == '1'){ echo "CAPACITACION"; } else if($datos_th_f_002['asunto'] == '2'){ echo "CHARLA"; } else if($datos_th_f_002['asunto'] == '3'){ echo "REUNION"; } else if($datos_th_f_002['asunto'] == '4'){ echo "DIVULGACION"; } ?></td>
        </tr>
        <tr>
            <td>FECHA: <?php echo $datos_th_f_002['fecha']; ?></td>
            <td>LUGAR: <?php echo $datos_th_f_002['lugar']; ?></td>
            <td>HORA INICIO: <?php echo $datos_th_f_002['hora_i']; ?></td>
            <td>HORA CIERRE: <?php echo $datos_th_f_002['hora_f']; ?></td>
        </tr>
        <tr>
            <td colspan="2">PERMISO N°: <?php echo $datos_th_f_002['permiso']  ?></td>
            <td colspan="2">INSTRUCTOR: <?php echo $datos_th_f_002['names']." ".$datos_th_f_002['lastnames']; ?></td>
        </tr>
        <tr>
            <td colspan="4">CONTENIDO: <?php echo $datos_th_f_002['contenido'];  ?></td>
        </tr>
        </table>

        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr><td colspan="6">MANIFIESTO QUE HE RECIBIDO Y ENTENDIDO EN TODO SU ALCANCE EL TEMA TRATADO Y ME COMPROMETO A CUMPLIR CON EL PROCEDIMIENTO O CONTENIDO DE LOS TEMAS Y RESPONSABILIDADES A MI ASIGNADAS. EN CONSTANCIA FIRMO:</td></tr>
            <tr style="background-color:#17a2b8!important; color: white;">
                <td>No</td>
                <td>NOMBRE</td>
                <td>CEDULA</td>
                <td>COMPAÑIA</td>
                <td>AREA/PROCESO</td>
                <td>FIRMA</td>
            </tr>
            <?php 
            $sql1="SELECT usuarios.`names`,
                usuarios.lastnames,
                usuarios.cedula,
                th_f_002_cuadrillas.id_registro,
                company.description,
                area_proces.description,
                th_f_002_cuadrillas.id_formato
                FROM th_f_002_cuadrillas
                JOIN usuarios ON usuarios.id_user = th_f_002_cuadrillas.usuario
                JOIN company ON company.id_company = usuarios.company
                JOIN area_proces ON area_proces.id_area = usuarios.`area`
                WHERE th_f_002_cuadrillas.id_formato = '$id_del_formato_recuperado'";
                $result1=mysqli_query($conexion,$sql1); $i=0;
                while ($ver=mysqli_fetch_row($result1)): ?>
            ?>
            <tr>
                <td><?php $i++; echo $i; ?></td>
                <td><?php echo $ver[1]." ".$ver[0] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    
</body>
</html>