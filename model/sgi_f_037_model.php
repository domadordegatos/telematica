<?php 
    class sgi_f_037_controller{

        public function agregar_formato(){
            require_once "conexion.php";
            $conexion=conexion();
            $a1=$_POST['form1'];   $a17=$_POST['form17']; $a33=$_POST['form33']; $a49=$_POST['form49']; $a65=$_POST['form65']; $a81=$_POST['form81'];
            $a2=$_POST['form2'];   $a18=$_POST['form18']; $a34=$_POST['form34'];                        $a66=$_POST['form66']; $a82=$_POST['form82'];
            $a3=$_POST['form3'];   $a19=$_POST['form19']; $a35=$_POST['form35']; $a51=$_POST['form51']; $a67=$_POST['form67']; $a83=$_POST['form83'];
            $a4=$_POST['form4'];   $a20=$_POST['form20']; $a36=$_POST['form36']; $a52=$_POST['form52']; $a68=$_POST['form68']; $a84=$_POST['form84'];
            $a5=$_POST['form5'];   $a21=$_POST['form21']; $a37=$_POST['form37']; $a53=$_POST['form53']; $a69=$_POST['form69']; $a85=$_POST['form85'];
            $a6=$_POST['form6'];   $a22=$_POST['form22']; $a38=$_POST['form38']; $a54=$_POST['form54']; $a70=$_POST['form70']; $a86=$_POST['form86'];
            $a7=$_POST['form7'];   $a23=$_POST['form23']; $a39=$_POST['form39']; $a55=$_POST['form55']; $a71=$_POST['form71']; $a87=$_POST['form87'];
            $a8=$_POST['form8'];   $a24=$_POST['form24']; $a40=$_POST['form40']; $a56=$_POST['form56']; $a72=$_POST['form72']; $a88=$_POST['form88'];
            $a9=$_POST['form9'];   $a25=$_POST['form25']; $a41=$_POST['form41']; $a57=$_POST['form57']; $a73=$_POST['form73']; $a89=$_POST['form89'];
            $a10=$_POST['form10']; $a26=$_POST['form26']; $a42=$_POST['form42']; $a58=$_POST['form58']; $a74=$_POST['form74']; $a90=$_POST['form90'];
            $a11=$_POST['form11']; $a27=$_POST['form27']; $a43=$_POST['form43']; $a59=$_POST['form59']; $a75=$_POST['form75']; $a91=$_POST['form91'];
            $a12=$_POST['form12']; $a28=$_POST['form28']; $a44=$_POST['form44']; $a60=$_POST['form60']; $a76=$_POST['form76']; $a92=$_POST['form92'];
            $a13=$_POST['form13']; $a29=$_POST['form29']; $a45=$_POST['form45']; $a61=$_POST['form61']; $a77=$_POST['form77']; $a93=$_POST['form93'];
            $a14=$_POST['form14']; $a30=$_POST['form30']; $a46=$_POST['form46']; $a62=$_POST['form62'];                        $a94=$_POST['form94'];
            $a15=$_POST['form15']; $a31=$_POST['form31']; $a47=$_POST['form47']; $a63=$_POST['form63']; $a79=$_POST['form79']; $a95=$_POST['form95'];
            $a16=$_POST['form16']; $a32=$_POST['form32']; $a48=$_POST['form48']; $a64=$_POST['form64']; $a80=$_POST['form80']; $a96=$_POST['form96'];

            $sql="INSERT INTO sgi_f_037 VALUES ('','$a1','$a2','$a3','$a4')";
            $ejecutar=mysqli_query($conexion, $sql);
            if($ejecutar){
                    $id= "SELECT id_037_principal FROM sgi_f_037 ORDER BY id_037_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                $sql="INSERT INTO sgi_f_037_items VALUES ('','$ver[0]','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44'
                                                                      ,'$a45','$a46','$a47','$a48','$a49','$a51','$a52','$a53','$a54','$a55'
                                                                      ,'$a56','$a57','$a58','$a59','$a60','$a61','$a62','$a63','$a64','$a65'
                                                                      ,'$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14'
                                                                      ,'$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24'
                                                                      ,'$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34'
                                                                      ,'$a66','$a67','$a68','$a69','$a70','$a71','$a72','$a73','$a74','$a75'
                                                                      ,'$a76','$a77','$a79','$a80','$a81','$a82','$a83','$a84','$a85','$a86'
                                                                      ,'$a87','$a88','$a89','$a90','$a91','$a92','$a93','$a94','$a95','$a96')";
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