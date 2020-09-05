<?php

    class sgi_f_030_controller{

        function agregar_formato (){

                $d1=$_POST['form1'];   $e1=$_POST['form13'];   $f1=$_POST['form24'];  $g1=$_POST['form36'];  $h1=$_POST['form47']; 
                $d2=$_POST['form2'];   $e2=$_POST['form14'];   $g2=$_POST['form37'];  $h2=$_POST['form48'];  
                $d3=$_POST['form3'];   $e3=$_POST['form15'];   $g3=$_POST['form38'];  $h3=$_POST['form49']; 
                $d4=$_POST['form4'];   $e4=$_POST['form16'];   $g4=$_POST['form39'];  $h4=$_POST['form50']; 
                $d5=$_POST['form5'];   $e5=$_POST['form17'];   $f5=$_POST['form28'];  $g5=$_POST['form40'];  $h5=$_POST['form51']; 
                $d6=$_POST['form6'];   $e6=$_POST['form18'];   $f6=$_POST['form29'];  $g6=$_POST['form41'];  $h6=$_POST['form52']; 
                $d7=$_POST['form7'];   $e7=$_POST['form19'];   $f7=$_POST['form30'];  $g7=$_POST['form42'];  $h7=$_POST['form53']; 
                $d8=$_POST['form8'];   $f8=$_POST['form31'];   $g8=$_POST['form43'];  $h8=$_POST['form54'];  $h12=$_POST['form32'];
                $e9=$_POST['form21'];   $f9=$_POST['form33'];  $g9=$_POST['form44'];  $h9=$_POST['form55'];  $h13=$_POST['form59'];
                $e10=$_POST['form22'];  $f10=$_POST['form34']; $g10=$_POST['form45']; $h10=$_POST['form56']; 
                $e11=$_POST['form23'];  $f11=$_POST['form35']; $g11=$_POST['form46']; $h11=$_POST['form57']; $h14=$_POST['form58'];
               $d12=$_POST['form12'];  

                require_once "conexion.php";//saber si conectado bd
                $conexion=conexion();// creo variable conexion
    
                $sql="INSERT INTO sgi_f_030 VALUES ('','$d1','$d2','$d3','$d4','$d5','$h12','$h13','1')";
                $ejecutar=mysqli_query($conexion, $sql);
                if($ejecutar){//verificamos que se haya insertado la primera parte

                    $id= "SELECT id_030_principal FROM sgi_f_030 ORDER BY id_030_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                    $sql="INSERT INTO sgi_f_030_especificacion VALUES ('','$ver[0]','$f9','$f10','$f11','$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$g9','$g10','$g11','$h1','$h2','$h3','$h4','$h5','$h6','$h7','$h8','$h9','$h10','$h11','$h14')";
                    $ejecutar=mysqli_query($conexion, $sql);

                    if($ejecutar){ //verificamos que se hayan insertado la marcas y seriales

                        $sql="INSERT INTO sgi_f_030_estado VALUES ('','$ver[0]','$d6','$d7','$d8','$d12','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e9','$e10','$e11','$f1','$f5','$f6','$f7','$f8')";
                        $ejecutar=mysqli_query($conexion, $sql);

                        if($ejecutar){//verificamos que se hayan insertado los estados y fin
                            echo 1;
                        }
                    }
                }else{
                    echo 2;
                }
        }

    }

 ?>