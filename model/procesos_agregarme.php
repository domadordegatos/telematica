<?php

    class agregarme{

        function validacion_personal (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
            $sql2="SELECT * FROM sgi_f_059 WHERE id_059_principal = '$id_formato' AND (integrante_2 = '$ver1[0]' OR integrante_1 = '$ver1[0]'
            OR integrante_3 = '$ver1[0]' OR integrante_4 = '$ver1[0]' OR integrante_5 = '$ver1[0]')";
            $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
            if(mysqli_num_rows($result2)<=0){// si no encontro al usuario en la bd entonces lo deja agregar al reporte
                $sql="SELECT integrante_1, integrante_2, integrante_3, integrante_4, integrante_5 FROM sgi_f_059 WHERE id_059_principal = '$id_formato'";
                $result=mysqli_query($conexion,$sql); $ver2=mysqli_fetch_row($result);
                if($ver2[0] == '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_059 SET integrante_1 = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_059 SET integrante_2 = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_059 SET integrante_3 = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_059 SET integrante_4 = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] != '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_059 SET integrante_5 = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
            }else{
                echo 2;
            }
        }

        function validacion_personal_058 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];   $a17=$_POST['form17'];
                                   $a18=$_POST['form18'];
            $a3=$_POST['form3'];   $a19=$_POST['form19'];
            $a4=$_POST['form4'];   $a20=$_POST['form20'];
            $a5=$_POST['form5'];   $a21=$_POST['form21'];
            $a6=$_POST['form6'];   $a22=$_POST['form22'];
            $a7=$_POST['form7'];   $a23=$_POST['form23'];
            $a8=$_POST['form8'];   $a24=$_POST['form24'];
            $a9=$_POST['form9'];   $a25=$_POST['form25'];
            $a10=$_POST['form10']; $a26=$_POST['form26'];
            $a11=$_POST['form11']; $a27=$_POST['form27'];
            $a12=$_POST['form12']; $a28=$_POST['form28'];
            $a13=$_POST['form13']; $a29=$_POST['form29'];
            $a14=$_POST['form14'];
            $a15=$_POST['form15'];
            $a16=$_POST['form16'];
            
            $sql2="SELECT * FROM sgi_f_058
            WHERE id_058_principal = '$id_formato' AND (trabajador = '$a3' OR trabajador2 = '$a3' 
                    OR trabajador3 = '$a3' OR trabajador4 = '$a3' OR trabajador5 = '$a3')";
            $result2=mysqli_query($conexion,$sql2);
            if(mysqli_num_rows($result2)<=0){// si no encontro al usuario en la bd entonces lo deja agregar al reporte
                $sql="SELECT trabajador, trabajador2, trabajador3, trabajador4, trabajador5 FROM sgi_f_058
                             WHERE id_058_principal = '$id_formato'";
                 $result=mysqli_query($conexion,$sql); $ver2=mysqli_fetch_row($result);

                if($ver2[0] != '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){

                    $sql="UPDATE sgi_f_058 SET trabajador2 = '$a3', medicamento2 = '$a4',
                                               sintoma2 = '$a5', enfermedad2 = '$a6',
                                               resultado2 = '$a7', horas2 = '$a8',
                                               factor2 = '$a9', examen2 = '$a10',
                                               alcohol2 = '$a11', comida2 = '$a12',
                                               hora_trabajo2 = '$a13', fecha_alturas2 = '$a14',
                                               hora_actual2 = '$a15', alcoholemia2 = '$a16',
                                               tension2 = '$a17', recomendacion2 = '$a18'  WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);

                    $sql="UPDATE sgi_f_058_preguntas SET 
                    per2_pregunta_1 = '$a19', per2_pregunta_2 = '$a20', per2_pregunta_3 = '$a21',
                    per2_pregunta_4 = '$a22', per2_pregunta_5 = '$a23', per2_pregunta_6 = '$a24',
                    per2_pregunta_7 = '$a25', per2_pregunta_8 = '$a26', per2_pregunta_9 = '$a27',
                    per2_pregunta_10 = '$a28', per2_pregunta_11 = '$a29'
                    WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_058 SET trabajador3 = '$a3', medicamento3 = '$a4',
                                               sintoma3 = '$a5', enfermedad3 = '$a6',
                                               resultado3 = '$a7', horas3 = '$a8',
                                               factor3 = '$a9', examen3 = '$a10',
                                               alcohol3 = '$a11', comida3 = '$a12',
                                               hora_trabajo3 = '$a13', fecha_alturas3 = '$a14',
                                               hora_actual3 = '$a15', alcoholemia3 = '$a16',
                                               tension3 = '$a17', recomendacion3 = '$a18' WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);

                    $sql="UPDATE sgi_f_058_preguntas SET 
                    per3_pregunta_1 = '$a19', per3_pregunta_2 = '$a20', per3_pregunta_3 = '$a21',
                    per3_pregunta_4 = '$a22', per3_pregunta_5 = '$a23', per3_pregunta_6 = '$a24',
                    per3_pregunta_7 = '$a25', per3_pregunta_8 = '$a26', per3_pregunta_9 = '$a27',
                    per3_pregunta_10 = '$a28', per3_pregunta_11 = '$a29'
                    WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_058 SET trabajador4 = '$a3', medicamento4 = '$a4',
                                               sintoma4 = '$a5', enfermedad4 = '$a6',
                                               resultado4 = '$a7', horas4 = '$a8',
                                               factor4 = '$a9', examen4 = '$a10',
                                               alcohol4 = '$a11', comida4 = '$a12',
                                               hora_trabajo4 = '$a13', fecha_alturas4 = '$a14',
                                               hora_actual4 = '$a15', alcoholemia4 = '$a16',
                                               tension4 = '$a17', recomendacion4 = '$a18' WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);

                    $sql="UPDATE sgi_f_058_preguntas SET 
                    per4_pregunta_1 = '$a19', per4_pregunta_2 = '$a20', per4_pregunta_3 = '$a21',
                    per4_pregunta_4 = '$a22', per4_pregunta_5 = '$a23', per4_pregunta_6 = '$a24',
                    per4_pregunta_7 = '$a25', per4_pregunta_8 = '$a26', per4_pregunta_9 = '$a27',
                    per4_pregunta_10 = '$a28', per4_pregunta_11 = '$a29'
                    WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] != '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_058 SET trabajador5 = '$a3', medicamento5 = '$a4',
                                               sintoma5 = '$a5', enfermedad5 = '$a6',
                                               resultado5 = '$a7', horas5 = '$a8',
                                               factor5 = '$a9', examen5 = '$a10',
                                               alcohol5 = '$a11', comida5 = '$a12',
                                               hora_trabajo5 = '$a13', fecha_alturas5 = '$a14',
                                               hora_actual5 = '$a15', alcoholemia5 = '$a16',
                                               tension5 = '$a17', recomendacion5 = '$a18' WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);

                    $sql="UPDATE sgi_f_058_preguntas SET 
                    per5_pregunta_1 = '$a19', per5_pregunta_2 = '$a20', per5_pregunta_3 = '$a21',
                    per5_pregunta_4 = '$a22', per5_pregunta_5 = '$a23', per5_pregunta_6 = '$a24',
                    per5_pregunta_7 = '$a25', per5_pregunta_8 = '$a26', per5_pregunta_9 = '$a27',
                    per5_pregunta_10 = '$a28', per5_pregunta_11 = '$a29'
                    WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
            }else{
                echo 2;
            }
        }

        function validacion_personal_029 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];   $a17=$_POST['form17']; $a33=$_POST['form33'];
                                   $a18=$_POST['form18']; $a34=$_POST['form34'];
                                   $a19=$_POST['form19']; $a35=$_POST['form35'];
            $a4=$_POST['form4'];   $a20=$_POST['form20'];
            $a5=$_POST['form5'];   $a21=$_POST['form21'];
            $a6=$_POST['form6'];   $a22=$_POST['form22'];
            $a7=$_POST['form7'];   $a23=$_POST['form23'];
            $a8=$_POST['form8'];   $a24=$_POST['form24'];
            $a9=$_POST['form9'];   $a25=$_POST['form25'];
            $a10=$_POST['form10']; $a26=$_POST['form26'];
            $a11=$_POST['form11']; $a27=$_POST['form27'];
            $a12=$_POST['form12']; $a28=$_POST['form28'];
            $a13=$_POST['form13']; 
            $a14=$_POST['form14']; $a30=$_POST['form30'];
            $a15=$_POST['form15']; $a31=$_POST['form31'];
            $a16=$_POST['form16']; $a32=$_POST['form32'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
            
            $sql2="SELECT * FROM sgi_f_029
            JOIN sgi_f_029_preguntas ON sgi_f_029_preguntas.id_029_principal = sgi_f_029.id_029_principal
            WHERE sgi_f_029.id_029_principal = '$id_formato' AND (sgi_f_029_preguntas.revisado_per_1 = '$ver1[0]' 
               OR sgi_f_029_preguntas.revisado_per_2 = '$ver1[0]' 
               OR sgi_f_029_preguntas.revisado_per_3 = '$ver1[0]' OR sgi_f_029_preguntas.revisado_per_4 = '$ver1[0]' 
               OR sgi_f_029_preguntas.revisado_per_5 = '$ver1[0]')";
            
            $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
            if(mysqli_num_rows($result2)<=0){// si no encontro al usuario en la bd entonces lo deja agregar al reporte
                $sql="SELECT revisado_per_1, revisado_per_2, revisado_per_3, revisado_per_4, revisado_per_5 
                FROM sgi_f_029_preguntas WHERE id_029_principal = '$id_formato'";
                $result=mysqli_query($conexion,$sql); $ver2=mysqli_fetch_row($result);
                if($ver2[0] == '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_029_preguntas SET revisado_per_1 = '$ver1[0]' WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_029_preguntas SET revisado_per_2 = '$ver1[0]', s_arnes_2 = '$a30', f_fabricacion_2 = '$a31',
                    s_eslinga_y_2 = '$a32', f_eslinga_y_2 = '$a33', s_eslinga_pos_2 = '$a34', f_eslinga_pos_2 = '$a35', pre_1_per_2 = '$a6',
                    pre_2_per_2 = '$a7', pre_3_per_2 = '$a8', pre_4_per_2 = '$a9', pre_5_per_2 = '$a10', pre_6_per_2 = '$a11', pre_7_per_2 = '$a12',
                    pre_8_per_2 = '$a13', pre_9_per_2 = '$a14', pre_10_per_2 = '$a15', pre_11_per_2 = '$a16', pre_12_per_2 = '$a17', pre_13_per_2 = '$a18',
                    pre_14_per_2 = '$a19', pre_15_per_2 = '$a20', pre_16_per_2 = '$a21', pre_17_per_2 = '$a22', pre_18_per_2 = '$a23', pre_19_per_2 = '$a24',
                    pre_20_per_2 = '$a25', pre_21_per_2 = '$a26', pre_22_per_2 = '$a27', pre_23_per_2 = '$a28'
                    WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_029_preguntas SET revisado_per_3 = '$ver1[0]', s_arnes_3 = '$a30', f_fabricacion_3 = '$a31',
                    s_eslinga_y_3 = '$a32', f_eslinga_y_3 = '$a33', s_eslinga_pos_3 = '$a34', f_eslinga_pos_3 = '$a35', pre_1_per_3 = '$a6',
                    pre_2_per_3 = '$a7', pre_3_per_3 = '$a8', pre_4_per_3 = '$a9', pre_5_per_3 = '$a10', pre_6_per_3 = '$a11', pre_7_per_3 = '$a12',
                    pre_8_per_3 = '$a13', pre_9_per_3 = '$a14', pre_10_per_3 = '$a15', pre_11_per_3 = '$a16', pre_12_per_3 = '$a17', pre_13_per_3 = '$a18',
                    pre_14_per_3 = '$a19', pre_15_per_3 = '$a20', pre_16_per_3 = '$a21', pre_17_per_3 = '$a22', pre_18_per_3 = '$a23', pre_19_per_3 = '$a24',
                    pre_20_per_3 = '$a25', pre_21_per_3 = '$a26', pre_22_per_3 = '$a27', pre_23_per_3 = '$a28'
                    WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_029_preguntas SET revisado_per_4 = '$ver1[0]', s_arnes_4 = '$a30', f_fabricacion_4 = '$a31',
                    s_eslinga_y_4 = '$a32', f_eslinga_y_4 = '$a33', s_eslinga_pos_4 = '$a34', f_eslinga_pos_4 = '$a35', pre_1_per_4 = '$a6',
                    pre_2_per_4 = '$a7', pre_3_per_4 = '$a8', pre_4_per_4 = '$a9', pre_5_per_4 = '$a10', pre_6_per_4 = '$a11', pre_7_per_4 = '$a12',
                    pre_8_per_4 = '$a13', pre_9_per_4 = '$a14', pre_10_per_4 = '$a15', pre_11_per_4 = '$a16', pre_12_per_4 = '$a17', pre_13_per_4 = '$a18',
                    pre_14_per_4 = '$a19', pre_15_per_4 = '$a20', pre_16_per_4 = '$a21', pre_17_per_4 = '$a22', pre_18_per_4 = '$a23', pre_19_per_4 = '$a24',
                    pre_20_per_4 = '$a25', pre_21_per_4 = '$a26', pre_22_per_4 = '$a27', pre_23_per_4 = '$a28'
                    WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] != '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_029_preguntas SET revisado_per_5 = '$ver1[0]', s_arnes_5 = '$a30', f_fabricacion_5 = '$a31',
                    s_eslinga_y_5 = '$a32', f_eslinga_y_5 = '$a33', s_eslinga_pos_5 = '$a34', f_eslinga_pos_5 = '$a35', pre_1_per_5 = '$a6',
                    pre_2_per_5 = '$a7', pre_3_per_5 = '$a8', pre_4_per_5 = '$a9', pre_5_per_5 = '$a10', pre_6_per_5 = '$a11', pre_7_per_5 = '$a12',
                    pre_8_per_5 = '$a13', pre_9_per_5 = '$a14', pre_10_per_5 = '$a15', pre_11_per_5 = '$a16', pre_12_per_5 = '$a17', pre_13_per_5 = '$a18',
                    pre_14_per_5 = '$a19', pre_15_per_5 = '$a20', pre_16_per_5 = '$a21', pre_17_per_5 = '$a22', pre_18_per_5 = '$a23', pre_19_per_5 = '$a24',
                    pre_20_per_5 = '$a25', pre_21_per_5 = '$a26', pre_22_per_5 = '$a27', pre_23_per_5 = '$a28'
                    WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
            }else{
                echo 2;
            }
        }

        function validacion_personal_065 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $epp=$_POST['form2'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
            $sql2="SELECT * FROM sgi_f_065 WHERE id_065_principal = '$id_formato' AND (integrante2 = '$ver1[0]' OR integrante1 = '$ver1[0]'
            OR integrante3 = '$ver1[0]' OR integrante4 = '$ver1[0]' OR integrante5 = '$ver1[0]')";
            $result2=mysqli_query($conexion,$sql2); $ver2=mysqli_fetch_row($result2);
            if(mysqli_num_rows($result2)<=0){// si no encontro al usuario en la bd entonces lo deja agregar al reporte
                $sql="SELECT integrante1, integrante2, integrante3, integrante4, integrante5 FROM sgi_f_065 WHERE id_065_principal = '$id_formato'";
                $result=mysqli_query($conexion,$sql); $ver2=mysqli_fetch_row($result);
                if($ver2[0] == '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_065 SET integrante1 = '$ver1[0]', epp1 = '$epp' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] == '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_065 SET integrante2 = '$ver1[0]', epp2 = '$epp' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] == '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_065 SET integrante3 = '$ver1[0]', epp3 = '$epp' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] == '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_065 SET integrante4 = '$ver1[0]', epp4 = '$epp' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
                if($ver2[0] != '' AND $ver2[1] != '' AND $ver2[2] != '' AND $ver2[3] != '' AND $ver2[4] == ''){
                    $sql="UPDATE sgi_f_065 SET integrante5 = '$ver1[0]', epp5 = '$epp' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
                }
            }else{
                echo 2;
            }
        }

        function validacion_coordinador (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

            $sql="UPDATE sgi_f_059 SET auth_c = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }

        function apoyo_piso (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

            $sql="UPDATE sgi_f_030 SET apoyo_piso = '$ver1[0]' WHERE id_030_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }

        function validacion_rescatista (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
            date_default_timezone_set('America/Bogota');
            $fecha= date('Y-m-d');

            $sql="UPDATE sgi_f_059 SET auth_r = '$ver1[0]' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }

        function validacion_rescatista_030 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];
            $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

            $sql="UPDATE sgi_f_030 SET rescatista = '$ver1[0]' WHERE id_030_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }

        function deshabilitar (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];

            $sql="UPDATE sgi_f_059 SET estado = '0' WHERE id_059_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }
        function deshabilitar_065 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];

            $sql="UPDATE sgi_f_065 SET estado = '0' WHERE id_065_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }
        function deshabilitar_029 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];

            $sql="UPDATE sgi_f_029 SET estado = '0' WHERE id_029_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }
        function deshabilitar_030 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];

            $sql="UPDATE sgi_f_030 SET estado = '0' WHERE id_030_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }
        function deshabilitar_058 (){
            require_once "conexion.php";
            $conexion=conexion();
            $id_formato=$_POST['form1'];

            $sql="UPDATE sgi_f_058 SET estado = '0' WHERE id_058_principal = '$id_formato'";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 3;
                    }
        }
    }
?>