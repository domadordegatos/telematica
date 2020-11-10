<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../../model/conexion.php"; 
          
          $conexion=conexion();
          $id_del_formato_recuperado=$_REQUEST['id_formato'];  

        $consulta="SELECT * FROM sgi_f_059 JOIN sgi_f_059_preguntas ON sgi_f_059_preguntas.id_059_prin = sgi_f_059.id_059_principal WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$consulta); $datos_059=mysqli_fetch_assoc($result);

        $sql="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.integrante_1 WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
        $sql1="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.integrante_2 WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
        $sql2="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.integrante_3 WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
        $sql3="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.integrante_4 WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result3=mysqli_query($conexion,$sql3); $ver3=mysqli_fetch_row($result3);
        $sql4="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.integrante_5 WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result4=mysqli_query($conexion,$sql4); $ver4=mysqli_fetch_row($result4);
        $sql5="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.auth_c WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result5=mysqli_query($conexion,$sql5); $ver5=mysqli_fetch_row($result5);
        $sql6="SELECT usuarios.lastnames, usuarios.`names`, usuarios.cedula FROM sgi_f_059 JOIN usuarios ON usuarios.id_user = sgi_f_059.auth_r WHERE id_059_principal = '$id_del_formato_recuperado'";
        $result6=mysqli_query($conexion,$sql6); $ver6=mysqli_fetch_row($result6);
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
        <td ROWSPAN="3" style="text-align: center;">CERTIFICADO DE APOYO PARA TRABAJO EN ALTURAS</td>
        <td>Código: SGI F 059</td>
        </tr>

        <tr><td>Revisado: Febrero 2019</td></tr>
        <tr><td>Versión: 03</td></tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="5">INFORMACION GENERAL</td>
            </tr>
            <tr>
                <td>No PERMISO DE TRABAJO: <?php echo $datos_059['numero_permiso']; ?></td>
                <td colspan="2">DESCRIPCION DEL TRABAJO: <?php echo $datos_059['descripcion']; ?></td>
                <td colspan="2">UBICACION EXACTA DEL TRABAJO: <?php echo $datos_059['ubicacion']; ?></td>
            </tr>
            <tr>
                <td>ALTURA TRABAJO: <?php echo $datos_059['altura_trabajo']." metros" ?></td>
                <td>HORA INICIO: <?php echo $datos_059['hora_inicio']; ?></td>
                <td>HORA FINALIZACIÓN: <?php echo $datos_059['hora_fin']; ?></td>
                <td>FECHA INICIO: <?php echo $datos_059['fecha_inicio']; ?></td>
                <td>FECHA FINALIZACIÓN: <?php echo $datos_059['fecha_fin']; ?></td>
            </tr>

            <tr>
                <td colspan="3">SITEMA DE ACCESO: <?php echo $datos_059['sistema_acceso']; ?></td>
                <td colspan="2">OTRO: <?php echo $datos_059['otro']; ?></td>
            </tr>
            <tr>
                <td colspan="5">EPP USADOS EN LA ACTIVIDAD: <?php echo $datos_059['epp']; ?></td>
            </tr>
            <tr>
                <td colspan="5">EPCC USADOS EN LA ACTIVIDAD: <?php echo $datos_059['epcc']; ?></td>
            </tr>
            <tr>
                <td colspan="5">HERRAMIENTAS Y EQUIPOS A USAR: <?php echo $datos_059['herramientas']; ?></td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="3">PERSONAL AUTORIZADO PARA TRABAJAR EN ALTURAS</td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td>NOMBRE Y APELLIDO</td>
                <td>No CEDULA</td>
                <td>FIRMA</td>
            </tr>
            <tr>
                <td><?php echo $ver[0]." ".$ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td><?php echo $ver1[0]." ".$ver1[1] ?></td>
                <td><?php echo $ver1[2] ?></td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td><?php echo $ver2[0]." ".$ver2[1] ?></td>
                <td><?php echo $ver2[2] ?></td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td><?php echo $ver3[0]." ".$ver3[1] ?></td>
                <td><?php echo $ver3[2] ?></td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr>
                <td><?php echo $ver4[0]." ".$ver4[1] ?></td>
                <td><?php echo $ver4[2] ?></td>
                <td style="text-align: center;">FIRMA</td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="3">REQUERIMIENTO DE CLARIDAD</td>
            </tr>
            <tr>
                <td colspan="2">EL SITIO DE TRABAJO CUENTA CON EL REQUERIMIENTO DE CLARIDAD ADECUDADO
                    CON RESPECTO A LA ESTRUCTURA DE TRABAJO</td>
                <td colspan="" style="text-align: center;"><?php echo $datos_059['requerimientos_claridad']; ?></td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr>
                <td rowspan="5" style="text-align: center;"><img src="https://i.ibb.co/q5sD3yL/torre.png" width="30%" alt="imagen de la torre"></td>
                <td style="text-align: center;">A</td>
                <td>Distancia de caida libre: (igual a la logitud de la eslinga</td>
                <td style="text-align: center;"><?php echo $datos_059['A']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">B</td>
                <td>Distancia de aceleración: (igual a la logitud del absorvente)</td>
                <td style="text-align: center;"><?php echo $datos_059['B']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">C</td>
                <td>Altura del trabajador</td>
                <td style="text-align: center;"><?php echo $datos_059['C']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">FS</td>
                <td>Factor de seguridad (debe ser como minimo 1 metro)</td>
                <td style="text-align: center;"><?php echo $datos_059['FS']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">D</td>
                <td>Requerimiento de claridad = A+B+C+FS</td>
                <td style="text-align: center;"><?php echo $datos_059['D']; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="4">LISTA DE CHEQUEO</td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td rowspan="2">No</td>
                <td rowspan="2">PREGUNTA/REQUISITO</td>
                <td colspan="2">Respuesta</td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td>SI</td>
                <td>NA</td>
            </tr>
            <tr>
                <td style="text-align: center;">1</td>
                <td>¿Los trabajadores se encuentran afiliados a seguridad social? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_1']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">2</td>
                <td>¿Los trabajadores cuentan con certificado de aptitud física (apto) ?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_2']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">3</td>
                <td>¿Los trabajadores cuentan con capacitación o certificado de competencia para trabajo en alturas vigente?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_3']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">4</td>
                <td>¿Se diligencio el permiso de trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_4']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">5</td>
                <td>¿Se realizó la charla de seguridad antes de iniciar el trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_5']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">6</td>
                <td>¿Se establecieron los roles a desempeñar durante el desarrollo del trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_6']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">7</td>
                <td>¿Existe un AST o análisis de riesgo vigente y divulgado, para la tarea y los controles recomendados han sido dispuestos?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_7']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">8</td>
                <td>¿Se cuenta y conocen el instructivo de rescate y plan de emergencia?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_8']; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td colspan="4">SITIO DE TRABAJO / ELEMENTOS </td>
            </tr>
            <tr>
                <td style="text-align: center;">9</td>
                <td>Se revisó el método de acceso al sitio: <strong><u><?php echo $datos_059['acceso_sitio']; ?></u></strong></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_9']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">10</td>
                <td>La estructura de la torre, poste, andamio o sitio donde se realizara el trabajo, está en buenas condiciones, no presenta daño estructural? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_10']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">11</td>
                <td>La línea de vida ha sido  inspeccionada? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_11']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">12</td>
                <td>La línea de vida es adecuada para soportar una caída? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_12']; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td colspan="4">LA PLATAFORMA DE TRABAJO</td>
            </tr>
            <tr>
                <td rowspan="6" style="text-align: center;">13</td>
                <td>¿Es firme?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_13']; ?></td>
            </tr>
            <tr>
                <td>¿Se encuentra en orden, no hay objetos sueltos?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_14']; ?></td>
            </tr>
            <tr>
                <td>¿Cuenta con barandas de 1, 20 mtrs?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_15']; ?></td>
            </tr>
            <tr>
                <td>¿Tiene instalados rodapiés?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_16']; ?></td>
            </tr>
            <tr>
                <td>¿Se cuenta con un sistema de limitación de movimiento o restricción de caída?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_17']; ?></td>
            </tr>
            <tr>
                <td>¿Tiene el piso cubierto para evitar caída de objetos pequeños por rendijas?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_18']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">14</td>
                <td>¿Los anclajes a utilizar son confiables? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_19']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">15</td>
                <td>¿Se han inspeccionado todos los elementos de izaje que se vayan utilizar durante el trabajo? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_20']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">16</td>
                <td>¿Los equipos de izaje de materiales son adecuados?. </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_21']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">17</td>
                <td>¿Se cuenta con personal suficiente para realizar el trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_22']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">18</td>
                <td>¿Se inspeccionaron los elementos propios del área de trabajo que tengan el riesgo de caer? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_23']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">19</td>
                <td>¿Se ha verificado que el método de subir herramientas hacia el sitio de trabajo es seguro? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_24']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">20</td>
                <td>¿Se ha señalizado y aislado el área debajo de la cual se realizará el trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_25']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">21</td>
                <td>¿Se cuenta con ayudante de seguridad?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_26']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">22</td>
                <td>¿Se cuenta con portaherramientas y cuerdas para amarrar las herramientas cuando se esté realizando el trabajo?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_27']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">23</td>
                <td>¿Se ha dispuesto de un método para asegurar que piezas retiradas durante el trabajo en altura no caigan? Algún tipo de recipiente?: <strong><u><?php echo $datos_059['recipiente']; ?></u></strong></td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_28']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">24</td>
                <td>¿El peso de las piezas, elementos o equipos que se vayan a manipular en lo alto es adecuado para la capacidad de la plataforma de trabajo y de la persona(s) que realizará el trabajo? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_29']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">25</td>
                <td>¿El volumen de las piezas, elementos o equipos que se vayan a manipular en lo alto es adecuado para la capacidad de la plataforma de trabajo y de la persona(s) que realizará el trabajo? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_30']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">26</td>
                <td>¿El personal que realiza trabajo en alturas se encuentre libre de elementos en los bolsillos que pueda causar lesiones durante la actividad o durante una caída. </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_31']; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                <td colspan="4">OTROS</td>
            </tr>
            <tr>
                <td style="text-align: center;">27</td>
                <td>¿Se cuenta con el EPCC equipo de protección contra caída (arnés y eslingas) certificados? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_32']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">28</td>
                <td>¿El EPCC ha sido inspeccionado según la lista de chequeo Lista de chequeo arnés </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_33']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">29</td>
                <td>¿Se elaboró un procedimiento y es conocido por todos los ejecutantes, </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_34']; ?></td>
            </tr>
            <tr>
                <td rowspan="5" style="text-align: center;">30</td>
                <td>¿Las condiciones climáticas son adecuadas para trabajar en campo abierto? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_35']; ?></td>
            </tr>
            <tr>
                <td>¿Hay presencia o amenaza de lluvia?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_36']; ?></td>
            </tr>
            <tr>
                <td>¿Las superficies de trabajo están secas?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_37']; ?></td>
            </tr>
            <tr>
                <td>Hay presencia o amenaza de Tormentas eléctricas?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_38']; ?></td>
            </tr>
            <tr>
                <td>¿Hay vientos fuertes que impidan el ascenso y trabajo seguro?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_39']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">31</td>
                <td>¿Se requiere realizar medición de atmosfera para realizar el trabajo? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_40']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">32</td>
                <td>¿Si la altura del trabajo supera los 15mts. Dispone del sistema de comunicación efectiva entre personal en alturas y piso?. (Radios dos vías).</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_41']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">33</td>
                <td>¿Si la altura del trabajo es inferior a 15mts evaluó si la comunicación es clara y efectiva entre personal en piso y en alturas.? </td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_42']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">34</td>
                <td>¿Se diligenció el formato de aptitud física?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_43']; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">35</td>
                <td>¿La estructura para el ascenso es segura?</td>
                <td colspan="2" style="text-align: center;"><?php echo $datos_059['pregunta_44']; ?></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="4"><strong>EN CASO DE TORMENTA ELÉCTRICA SE DEBE SUSPENDER EL TRABAJO</strong> </td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;">
                <td colspan="4">SUPERVISIÓN Y CONTROL DEL TRABAJO</td>
            </tr>
        </table>

        <table border="1" style="width: 100%;">
            <tr>
                <td rowspan="2" style="text-align: center; background-color:#80c0ca!important; color: white; height: 70px;">COORDINADOR DE ALTURAS</td>
                <td>NOMBRE: <?php echo $ver5[0]." ".$ver5[1]; ?></td>
                <td rowspan="2" style="text-align: center; background-color:#80c0ca!important; color: white; height: 70px;">RESCATISTA</td>
                <td>NOMBRE: <?php echo $ver6[0]." ".$ver6[1]; ?></td>
            </tr>
            <tr>
                <td>No CEDULA: <?php echo $ver5[2]; ?></td>
                <td>No CEDULA: <?php echo $ver6[2]; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#17a2b8!important; color: white;"><td colspan="4">AUTORIZACIÓN PARA EL TRABAJO</td></tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                    <td colspan="1" style="text-align: center;">Coord. Operaciones o líder de la actividad</td>
                    <td colspan="3" style="text-align: center;">DATOS</td>
            </tr>
            <tr>
                <td colspan="1">FECHA</td>
                <td colspan="3"><?php echo $datos_059['fecha_inicio']; ?></td>
            </tr>
            <tr>
                <td colspan="1">NOMBRE</td>
                <td colspan="3"><?php echo $ver5[0]." ".$ver5[1]; ?></td>
            </tr>
            <tr>
                <td colspan="1">FIRMA</td>
                <td colspan="3">FIRMA</td>
            </tr>
            <tr>
                <td colspan="1">No CEDULA</td>
                <td colspan="3"><?php echo $ver5[2]; ?></td>
            </tr>
            <tr style="text-align: center; background-color:#80c0ca!important; color: white;">
                    <td colspan="1" style="text-align: center;">Rescatista</td>
                    <td colspan="3" style="text-align: center;">DATOS</td>
            </tr>
            <tr>
                <td colspan="1">FECHA</td>
                <td colspan="3"><?php echo $datos_059['fecha_inicio']; ?></td>
            </tr>
            <tr>
                <td colspan="1">NOMBRE</td>
                <td colspan="3"><?php echo $ver6[0]." ".$ver6[1]; ?></td>
            </tr>
            <tr>
                <td colspan="1">FIRMA</td>
                <td colspan="3">FIRMA</td>
            </tr>
            <tr>
                <td colspan="1">No CEDULA</td>
                <td colspan="3"><?php echo $ver6[2]; ?></td>
            </tr>
            
        </table>

    </div>
    
</body>
</html>