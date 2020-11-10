<?php 
    class sgi_f_059_controller{

        public function agregar_formato(){
            require_once "conexion.php"; $conexion=conexion();

            $a1=$_POST['form1'];   $a17=$_POST['form17']; $a33=$_POST['form33']; $a49=$_POST['form49']; $a65=$_POST['form65'];
            $a2=$_POST['form2'];   $a18=$_POST['form18']; $a34=$_POST['form34']; $a50=$_POST['form50']; $a66=$_POST['form66'];
            $a3=$_POST['form3'];   $a19=$_POST['form19']; $a35=$_POST['form35']; $a51=$_POST['form51']; $a67=$_POST['form67'];
            $a4=$_POST['form4'];   $a20=$_POST['form20']; $a36=$_POST['form36']; $a52=$_POST['form52']; $a68=$_POST['form68'];
            $a5=$_POST['form5'];                          $a37=$_POST['form37']; $a53=$_POST['form53'];
            $a6=$_POST['form6'];                          $a38=$_POST['form38']; $a54=$_POST['form54'];
            $a7=$_POST['form7'];   $a23=$_POST['form23']; $a39=$_POST['form39']; $a55=$_POST['form55'];
            $a8=$_POST['form8'];   $a24=$_POST['form24']; $a40=$_POST['form40']; $a56=$_POST['form56'];
            $a9=$_POST['form9'];   $a25=$_POST['form25']; $a41=$_POST['form41']; $a57=$_POST['form57'];
            $a10=$_POST['form10']; $a26=$_POST['form26']; $a42=$_POST['form42']; $a58=$_POST['form58'];
            $a11=$_POST['form11']; $a27=$_POST['form27']; $a43=$_POST['form43']; $a59=$_POST['form59'];
            $a12=$_POST['form12']; $a28=$_POST['form28']; $a44=$_POST['form44']; $a60=$_POST['form60'];
            $a13=$_POST['form13']; $a29=$_POST['form29']; $a45=$_POST['form45']; $a61=$_POST['form61'];
            $a14=$_POST['form14']; $a30=$_POST['form30']; $a46=$_POST['form46']; $a62=$_POST['form62'];
            $a15=$_POST['form15']; $a31=$_POST['form31']; $a47=$_POST['form47']; $a63=$_POST['form63'];
            $a16=$_POST['form16']; $a32=$_POST['form32']; $a48=$_POST['form48']; $a64=$_POST['form64'];

            $sql="INSERT INTO sgi_f_059 (id_059_principal,numero_permiso,descripcion,ubicacion,altura_trabajo
                                         ,hora_inicio,hora_fin,fecha_inicio,fecha_fin,sistema_acceso,otro
                                         ,epp,epcc,herramientas,integrante_1,requerimientos_claridad,A,B,C,FS
                                         ,D,acceso_sitio,recipiente,estado) 
            VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a66','$a9','$a10','$a11','$a12','$a13'
                      ,'$a67','$a14','$a15','$a16','$a17','$a18','$a19','$a20','1')";
            $ejecutar=mysqli_query($conexion, $sql);
            if($ejecutar){
                    $id= "SELECT id_059_principal FROM sgi_f_059 ORDER BY id_059_principal DESC LIMIT 0,1";
                    $result1=mysqli_query($conexion,$id);
                    $ver=mysqli_fetch_row($result1); //averiguamos el id que se creo al insertar en la tabla principal para usarlo en las demas

                $sql="INSERT INTO sgi_f_059_preguntas VALUES ('','$ver[0]','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32'
                                                                   ,'$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43'
                                                                   ,'$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$a52','$a53','$a54'
                                                                   ,'$a55','$a56','$a57','$a58','$a59','$a60','$a61','$a62','$a63','$a64','$a65','$a68')";
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