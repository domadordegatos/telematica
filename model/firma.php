<?php 
            require_once "conexion.php";
            $conexion=conexion();
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/telematica/view/media/firmas/';
            $permitidos = array("image/png");
            $limite_kb = 100; $cedula=$_POST['cedulaoculta'];
            /* echo $cedula; */
            $sql="SELECT firma FROM usuarios ORDER BY firma DESC LIMIT 0,1";
            $result=mysqli_query($conexion,$sql); $ultima_firma=mysqli_fetch_row($result);
            
            if(in_array($_FILES['firma']['type'], $permitidos) && $_FILES['firma']['size'] <= $limite_kb * 1024){
                
                $info = pathinfo($_FILES['firma']['name']); //obtenermos el nombre de la imagen completo
                $ext = $info['extension'];//quitamos la extencion
                $newname = ($ultima_firma[0]+1).".".$ext; //ponemos un nombre nuevo y le agregamos la extencion quitada
                $ruta = $carpeta_destino.$newname; //le decimos donde lo queremos guardar
                move_uploaded_file($_FILES['firma']['tmp_name'],$ruta);

                    $sql="SELECT cedula, firma FROM usuarios WHERE cedula = '$cedula'";
                    $result=mysqli_query($conexion,$sql); $cedula_firma=mysqli_fetch_row($result);
                        $new_firma=$ultima_firma[0]+1;
                        if($cedula_firma[0] != '' AND $cedula_firma[1] == ''){
                            $sql="UPDATE usuarios SET firma = '$new_firma' WHERE cedula = '$cedula'";
                            $result=mysqli_query($conexion,$sql);

                            header("Location: http://localhost/telematica/view/login_create/200.php");
                        }else{
                            header("Location: http://localhost/telematica/view/login_create/404.php");
                        }
            }else if($_FILES['firma']['size'] >= ($limite_kb *1024)){
                header("Location: http://localhost/telematica/view/login_create/404.php");
            }
?>