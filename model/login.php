<?php

    class login{

        function iniciar (){
            $user=$_POST['form1'];$password=$_POST['form2'];
            require_once "conexion.php";
            $conexion=conexion();

            $sql="SELECT * FROM login_users WHERE usuario = '$user' and password = '$password'";
            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);
                if(mysqli_num_rows($result)<=0){//no encontro registrros bd
                  echo 2;//no hay registros
                }else if($ver[3] == 0){ //usuario desactivado
                    echo 3;
                }else if($ver[3] == 1){//usuario activo
                    $_SESSION['user']=$user;
                    echo 1;
                }else{ //error
                    echo 0;
                }
        }

        function register(){
            $nombres=$_POST['form1'];$apellidos=$_POST['form2'];$cedula=$_POST['form3'];$usuario=$_POST['form4'];
            $contrasena=$_POST['form5'];$compania=$_POST['form6'];$area=$_POST['form7'];$cargo=$_POST['form8'];
            $rol=$_POST['form9'];            
            require_once "conexion.php";
            $conexion=conexion();

            $sql="SELECT * FROM usuarios JOIN login_users ON login_users.id_user = usuarios.credenciales
                                              WHERE cedula = '$cedula' OR login_users.usuario = '$usuario';"; //verificamos si hay usuarios existente con cedula o usuario en bd
            $result=mysqli_query($conexion, $sql);
            if(mysqli_num_rows($result)<=0){//no encontro registrros bd, agregamos
                $sql="INSERT INTO login_users VALUES ('','$usuario','$contrasena','1','$rol')";//agregamos primero el usuario
                $ejecutar=mysqli_query($conexion, $sql);

                    if($ejecutar){
                        $id= "SELECT id_user FROM login_users ORDER BY id_user DESC LIMIT 0,1";
                        $result1=mysqli_query($conexion,$id);
                        $ver=mysqli_fetch_row($result1);  //averiguamos el id del registro que creo la insersion del usuario

                        $sql="INSERT INTO usuarios VALUES ('','$nombres','$apellidos','$cedula','$compania','$area','$cargo','$ver[0]')";
                        $ejecutar=mysqli_query($conexion, $sql);

                            if($ejecutar){
                                echo 1;
                            }
                    }

            }else{ //el usuario ya existe
                echo 2;
            }
        }
    }
?>