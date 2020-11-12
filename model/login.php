<?php

    class login{

        function actualizar_user(){
            require_once "conexion.php";
            $conexion=conexion();
            $a1=$_POST['form1']; $a2=$_POST['form2']; $a3=$_POST['form3']; $a4=$_POST['form4']; $a5=$_POST['form5'];
            $a6=$_POST['form6']; $a7=$_POST['form7']; $a8=$_POST['form8']; $a9=$_POST['form9']; $a10=$_POST['form10']; $a11=$_POST['form11'];

            $sql="SELECT credenciales FROM usuarios WHERE id_user = '$a11'";
            $ejecutar=mysqli_query($conexion, $sql); $credencial=mysqli_fetch_row($ejecutar);

            $sql1="UPDATE usuarios SET names = '$a5', lastnames = '$a6', cedula = '$a7', company = '$a8', area = '$a9', cargo = '$a10' WHERE id_user = '$a11'";
            $ejecutar1=mysqli_query($conexion, $sql1);
                if($ejecutar1){
                    $sql2="UPDATE login_users SET usuario = '$a1', login_users.password = '$a2', estado = '$a3', rol = '$a4' WHERE id_user = '$credencial'";
                    $ejecutar2=mysqli_query($conexion, $sql2);
                        if($ejecutar2){
                            echo 1;
                        }
                }else{
                    echo 2;
                }
        }

        function ob_datos_usuario(){
            require_once "conexion.php";
            $conexion=conexion();
            $id=$_POST['id_empleado'];

            $sql1="SELECT * FROM usuarios JOIN login_users ON login_users.id_user = usuarios.credenciales where usuarios.id_user = '$id'";
                $result=mysqli_query($conexion,$sql1);
                $ver=mysqli_fetch_row($result);
                $datos=array( "0" => $ver[0],
                              "1" => $ver[1],
                              "2" => $ver[2],
                              "3" => $ver[3],
                              "4" => $ver[4],
                              "5" => $ver[5],
                              "6" => $ver[6],
                              "7" => $ver[7],
                              "8" => $ver[8],
                              "9" => $ver[9],
                              "10" => $ver[10],
                              "11" => $ver[11],
                              "12" => $ver[12],
                              "13" => $ver[13]
                                );
                                return $datos;
        }


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

                        $sql="INSERT INTO usuarios VALUES ('','$nombres','$apellidos','$cedula','$compania','$area','$cargo','$ver[0]','')";
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