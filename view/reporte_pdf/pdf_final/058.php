<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  

        $consulta="SELECT * FROM sgi_f_058 JOIN sgi_f_058_preguntas ON sgi_f_058_preguntas.id_058_principal = sgi_f_058.id_058_principal WHERE sgi_f_058.id_058_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_058=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, company.description FROM sgi_f_058 
		JOIN usuarios ON usuarios.id_user = sgi_f_058.trabajador JOIN company ON company.id_company = usuarios.company JOIN cargos ON cargos.id_cargo = usuarios.cargo WHERE id_058_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, company.description FROM sgi_f_058 
		JOIN usuarios ON usuarios.id_user = sgi_f_058.trabajador2 JOIN company ON company.id_company = usuarios.company JOIN cargos ON cargos.id_cargo = usuarios.cargo WHERE id_058_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, company.description FROM sgi_f_058 
		JOIN usuarios ON usuarios.id_user = sgi_f_058.trabajador3 JOIN company ON company.id_company = usuarios.company JOIN cargos ON cargos.id_cargo = usuarios.cargo WHERE id_058_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
        $sql3="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, company.description FROM sgi_f_058 
		JOIN usuarios ON usuarios.id_user = sgi_f_058.trabajador4 JOIN company ON company.id_company = usuarios.company JOIN cargos ON cargos.id_cargo = usuarios.cargo WHERE id_058_principal = '$id_del_formato_recuperado'";
        $result3=mysqli_query($conexion,$sql3); $ver3=mysqli_fetch_row($result3);
        $sql4="SELECT usuarios.lastnames, usuarios.`names`, cargos.descripcion, company.description FROM sgi_f_058 
		JOIN usuarios ON usuarios.id_user = sgi_f_058.trabajador5 JOIN company ON company.id_company = usuarios.company JOIN cargos ON cargos.id_cargo = usuarios.cargo WHERE id_058_principal = '$id_del_formato_recuperado'";
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
        <td ROWSPAN="3" style="text-align: center;">CUESTIONARIO DE APTITUD FISICA</td>
        <td>Código: SGI F 058</td>
        </tr>

        <tr><td>Revisado: Septiembre 2018</td></tr>
        <tr><td>Versión: 01</td></tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr>
                <td colspan="">ACTIVIDAD: <?php echo $datos_058['actividad']; ?></td>
                <td>FECHA: <?php echo $datos_058['fecha']; ?></td>
            </tr>
        </table>
        <table border="1" style="width: 100%;">
            <tr>
                <td style="text-align: right;" colspan="2">NOMBRE DEL TRABAJADOR:</td>
                <td><?php echo $ver[0]." ".$ver[1] ?></td>
                <td><?php echo $ver1[0]." ".$ver1[1] ?></td>
                <td><?php echo $ver2[0]." ".$ver2[1] ?></td>
                <td><?php echo $ver3[0]." ".$ver3[1] ?></td>
                <td><?php echo $ver4[0]." ".$ver4[1] ?></td>
            </tr>
            <tr>
                <td style="text-align: right;" colspan="2">EMPRESA:</td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver1[3] ?></td>
                <td><?php echo $ver2[3] ?></td>
                <td><?php echo $ver3[3] ?></td>
                <td><?php echo $ver4[3] ?></td>
            </tr>
            <tr>
                <td style="text-align: right;" colspan="2">CARGO:</td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver1[2] ?></td>
                <td><?php echo $ver2[2] ?></td>
                <td><?php echo $ver3[2] ?></td>
                <td><?php echo $ver4[2] ?></td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td style="text-align: center;">No</td>
                <td style="text-align: center;">CUESTIONARIO</td>
                <td style="text-align: center;">SI / NO</td>
                <td style="text-align: center;">SI / NO</td>
                <td style="text-align: center;">SI / NO</td>
                <td style="text-align: center;">SI / NO</td>
                <td style="text-align: center;">SI / NO</td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="2">1</td>
                <td>Esta tomando actualmente algún medicamento?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_1']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_1']; ?></td>
            </tr>
            <tr>
                <td>Cual?</td>
                <td style="text-align: center;"><?php echo $datos_058['medicamento']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['medicamento2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['medicamento3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['medicamento4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['medicamento5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="2">2</td>
                <td>En los últimos días a presentado algún síntoma o signo de enfermedad?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_2']; ?></td>
            </tr>
            <tr>
                <td>Cual?</td>
                <td style="text-align: center;"><?php echo $datos_058['sintoma']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['sintoma2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['sintoma3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['sintoma4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['sintoma5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="2">3</td>
                <td>Cree usted tener alguna enfermedad que le impida realizar este trabajo?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_3']; ?></td>
            </tr>
            <tr>
                <td>Por que?</td>
                <td style="text-align: center;"><?php echo $datos_058['enfermedad']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['enfermedad2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['enfermedad3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['enfermedad4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['enfermedad5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="2">4</td>
                <td>Se realizó su examen médico ocupacional al ingreso a la compañía?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_4']; ?></td>
            </tr>
            <tr>
                <td>Por que?</td>
                <td style="text-align: center;"><?php echo $datos_058['resultado']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['resultado2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['resultado3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['resultado4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['resultado5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="2">5</td>
                <td>Durmió normalmente en su descanso?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_5']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_5']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_5']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_5']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_5']; ?></td>
            </tr>
            <tr>
                <td>Cuantas horas durmio?</td>
                <td style="text-align: center;"><?php echo $datos_058['horas']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['horas2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['horas3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['horas4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['horas5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">6</td>
                <td>Ha realizado trabajos similares anteriormente?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_6']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_6']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_6']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_6']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_6']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">7</td>
                <td>Le han explicado el procedimiento y se siente capaz para realizarlo?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_7']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_7']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_7']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_7']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_7']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">8</td>
                <td>Ha tenido algún incidente de salud realizando trabajos similares anteriormente?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_8']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_8']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_8']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_8']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_8']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">9</td>
                <td>Ha tenido estado febril en las ultimas 12 horas?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_9']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_9']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_9']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_9']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_9']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">10</td>
                <td>Sufre de vértigo?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_10']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_10']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_10']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_10']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_10']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">11</td>
                <td>Se siente preparado para realizar la labor, los factores propios de su cotianidad le permitirán realizar la labor de acuerdo  a lo planeado?</td>
                <td style="text-align: center;"><?php echo $datos_058['per1_pregunta_11']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per2_pregunta_11']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per3_pregunta_11']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per4_pregunta_11']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['per5_pregunta_11']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">12</td>
                <td>¿Qué factor siente que no le permite concentrarse? (familiar, econonómico, social, estado de ánimo)</td>
                <td style="text-align: center;"><?php echo $datos_058['factor']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['factor2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['factor3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['factor4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['factor5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">13</td>
                <td>Cuándo fue su último examen periódico y se incluyo examen de laboratorio, Visiometría y audiometría?</td>
                <td style="text-align: center;"><?php echo $datos_058['examen']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['examen2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['examen3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['examen4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['examen5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">14</td>
                <td>Cuando ingirió alcohol por última vez?(si no toma no llenar)</td>
                <td style="text-align: center;"><?php echo $datos_058['alcohol']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['alcohol2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['alcohol3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['alcohol4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['alcohol5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">15</td>
                <td>A que horas tuvo su última comida?</td>
                <td style="text-align: center;"><?php echo $datos_058['comida']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['comida2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['comida3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['comida4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['comida5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">16</td>
                <td>A que hora inicio a trabajar hoy (llego a su sede de trabajo)</td>
                <td style="text-align: center;"><?php echo $datos_058['hora_trabajo']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['hora_trabajo2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['hora_trabajo3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['hora_trabajo4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['hora_trabajo5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" rowspan="">17</td>
                <td>Fecha de realización entrenamiento trabajo en alturas avanzado (si aplica para el trabajo)</td>
                <td style="text-align: center;"><?php echo $datos_058['fecha_alturas']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['fecha_alturas2']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['fecha_alturas3']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['fecha_alturas4']; ?></td>
                <td style="text-align: center;"><?php echo $datos_058['fecha_alturas5']; ?></td>
            </tr>
             <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                 <td colspan="7">VALORACIÓN</td>
             </tr>
             <tr>
                 <td style="text-align: right;" colspan="2">HORA:</td>
                 <td><?php echo $datos_058['hora_actual']; ?></td>
                 <td><?php echo $datos_058['hora_actual2']; ?></td>
                 <td><?php echo $datos_058['hora_actual3']; ?></td>
                 <td><?php echo $datos_058['hora_actual4']; ?></td>
                 <td><?php echo $datos_058['hora_actual5']; ?></td>
             </tr>
             <tr>
                <td style="text-align: right;" colspan="2">RESULTADO ALCOHOLIMETRIA:</td>
                <td><?php echo $datos_058['alcoholemia']; ?></td>
                <td><?php echo $datos_058['alcoholemia2']; ?></td>
                <td><?php echo $datos_058['alcoholemia3']; ?></td>
                <td><?php echo $datos_058['alcoholemia4']; ?></td>
                <td><?php echo $datos_058['alcoholemia5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right;" colspan="2">RESULTADO DE TOMA DE TENSIÓN:</td>
                <td><?php echo $datos_058['tension']; ?></td>
                <td><?php echo $datos_058['tension2']; ?></td>
                <td><?php echo $datos_058['tension3']; ?></td>
                <td><?php echo $datos_058['tension4']; ?></td>
                <td><?php echo $datos_058['tension5']; ?></td>
            </tr>
        </table>
        <table border="1" style="width: 100%;">
            <tr>
                <td style="text-align: center; background-color:#17a2b8!important; color: white;" colspan="2">FIRMA DEL ENCARGADO:</td>
                <td colspan="5" style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td>DECLARO QUE LA INFORMACION SUMINISTRADA ES VERAS Y FIDEDIGNA.</td>
                <td style="text-align: center;">FIRMA DEL TRABAJADOR:</td>
                <td style="text-align: center;">FIRMA</td>
                <td style="text-align: center;">FIRMA</td>
                <td style="text-align: center;">FIRMA</td>
                <td style="text-align: center;">FIRMA</td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td colspan="7"><strong>Concepto y Recomendación</strong></td>
            </tr>
            <tr><td colspan="7"><strong>TRABAJADOR 1:</strong><?php echo $datos_058['recomendacion']; ?></td></tr>
            <tr><td colspan="7"><strong>TRABAJADOR 2:</strong><?php echo $datos_058['recomendacion2']; ?></td></tr>
            <tr><td colspan="7"><strong>TRABAJADOR 3:</strong><?php echo $datos_058['recomendacion3']; ?></td></tr>
            <tr><td colspan="7"><strong>TRABAJADOR 4:</strong><?php echo $datos_058['recomendacion4']; ?></td></tr>
            <tr><td colspan="7"><strong>TRABAJADOR 5:</strong><?php echo $datos_058['recomendacion5']; ?></td></tr>
        </table>

    </div>
    
</body>
</html>