<?php

    class sgi_f_029_controller{

        function agregar_formato (){
            require_once "conexion.php";
            $conexion=conexion();
            $a1=$_POST['form1'];   $a17=$_POST['form17']; $a33=$_POST['form33'];
            $a2=$_POST['form2'];   $a18=$_POST['form18']; $a34=$_POST['form34'];
            $a3=$_POST['form3'];   $a19=$_POST['form19']; $a35=$_POST['form35'];
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
            $a14=$_POST['form14']; $a30=$_POST['form30'];
            $a15=$_POST['form15']; $a31=$_POST['form31'];
            $a16=$_POST['form16']; $a32=$_POST['form32'];
            $user = $_SESSION['user'];

            $sql="INSERT INTO sgi_f_029 VALUES ('','$a1','$a2','$a3','$a4','1')";
                $ejecutar=mysqli_query($conexion, $sql);
                if($ejecutar){//verificamos que se haya insertado la primera parte
                    $id= "SELECT id_029_principal FROM sgi_f_029 ORDER BY id_029_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                    $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
                    $result=mysqli_query($conexion,$sql); $ver0=mysqli_fetch_row($result);
                    $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver0[0]'";
                    $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

                    $sql="INSERT INTO sgi_f_029_preguntas (id_029_preguntas,id_029_principal,revisado_per_1,s_arnes_1,f_fabricacion_1,
                                      s_eslinga_y_1,f_eslinga_y_1,s_eslinga_pos_1,f_eslinga_pos_1,
                                      pre_1_per_1,pre_2_per_1,pre_3_per_1,pre_4_per_1,pre_5_per_1,pre_6_per_1,pre_7_per_1,pre_8_per_1,
                                      pre_9_per_1,pre_10_per_1,pre_11_per_1,pre_12_per_1,pre_13_per_1,pre_14_per_1,pre_15_per_1,
                                      pre_16_per_1,pre_17_per_1,pre_18_per_1,pre_19_per_1,pre_20_per_1,pre_21_per_1,pre_22_per_1,pre_23_per_1) 
                                      VALUES ('','$ver[0]','$ver1[0]','$a30','$a31','$a32','$a33','$a34','$a35','$a6','$a7','$a8','$a9'
                                              ,'$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21'
                                              ,'$a22','$a23','$a24','$a25','$a26','$a27','$a28')";
                    $ejecutar=mysqli_query($conexion, $sql);
                    if($ejecutar){
                        echo 1;
                    }else{
                        echo 2;
                    }
                }else{
                    echo 2;
                }
        }
    }
?>