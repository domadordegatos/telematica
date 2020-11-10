<?php 
    class sgi_f_065_controller{

        public function agregar_formato(){
            require_once "conexion.php"; $conexion=conexion();

            $a1=$_POST['form1'];                          $a81=$_POST['form81'];
            $a2=$_POST['form2'];   $a66=$_POST['form66']; $a82=$_POST['form82'];
            $a3=$_POST['form3'];   $a67=$_POST['form67']; $a83=$_POST['form83'];
            $a4=$_POST['form4'];   $a68=$_POST['form68']; $a84=$_POST['form84'];
            $a5=$_POST['form5'];   $a69=$_POST['form69']; 
            $a6=$_POST['form6'];   $a70=$_POST['form70']; 
               $a71=$_POST['form71']; 
               $a72=$_POST['form72']; 
               $a73=$_POST['form73']; $a89=$_POST['form89'];
               $a74=$_POST['form74']; $a90=$_POST['form90'];
            $a11=$_POST['form11']; $a75=$_POST['form75']; $a91=$_POST['form91'];
            $a12=$_POST['form12']; $a76=$_POST['form76']; $a92=$_POST['form92'];
                                   $a77=$_POST['form77'];
                                                        
                                   $a79=$_POST['form79'];
                                   $a80=$_POST['form80'];

            $sql="INSERT INTO sgi_f_065 (id_065_principal,lugar,lider_1,acudiente,telefono,descripcion,integrante1,observaciones,lider_2,epp1,estado) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a11','$a12','$a84','1')";
            $ejecutar=mysqli_query($conexion, $sql);
            if($ejecutar){
                    $id= "SELECT id_065_principal FROM sgi_f_065 ORDER BY id_065_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                $sql="INSERT INTO sgi_f_065_especificacion VALUES ('','$ver[0]','$a66','$a67','$a68','$a69','$a70','$a71','$a72','$a73','$a74','$a75'
                                                                      ,'$a76','$a77','$a79','$a80','$a81','$a82','$a83','$a89','$a90','$a91','$a92')";
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