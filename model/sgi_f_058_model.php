<?php

    class sgi_f_058_controller{

        function agregar_formato (){
            require_once "conexion.php";
            $conexion=conexion();
            $a1=$_POST['form1'];   $a17=$_POST['form17'];
            $a2=$_POST['form2'];   $a18=$_POST['form18'];
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
            $user = $_SESSION['user'];

            $sql="INSERT INTO sgi_f_058 (id_058_principal,actividad,fecha,trabajador,medicamento,sintoma,
                                enfermedad,resultado,horas,factor,examen,alcohol,comida,hora_trabajo,fecha_alturas,
                                hora_actual,alcoholemia,tension,recomendacion,estado) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','1')";
                $ejecutar=mysqli_query($conexion, $sql);
                if($ejecutar){//verificamos que se haya insertado la primera parte
                    $id= "SELECT id_058_principal FROM sgi_f_058 ORDER BY id_058_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                    $sql="INSERT INTO sgi_f_058_preguntas (id_058_preguntas,id_058_principal,per1_pregunta_1,per1_pregunta_2,per1_pregunta_3,per1_pregunta_4
                                                           ,per1_pregunta_5,per1_pregunta_6,per1_pregunta_7,per1_pregunta_8,per1_pregunta_9,per1_pregunta_10
                                                           ,per1_pregunta_11) 
                                      VALUES ('','$ver[0]','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29')";
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