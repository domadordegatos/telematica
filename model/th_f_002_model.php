<?php 
    class th_f_002_controller{

        public function desactivar_formato_002(){
            require_once "conexion.php"; $conexion=conexion();

            $id=$_POST['form1'];
            $sql="UPDATE th_f_002 SET estado = 0 WHERE id_th_f_002 = '$id'";
            $ejecutar2=mysqli_query($conexion, $sql);
            if($ejecutar2){
                echo 1;
            }else{
                echo 2;
            }

        }


        public function agregar_nuevo_formato(){
            $asunto=$_POST['form1'];$fecha=$_POST['form2'];$lugar=$_POST['form3'];
            $horai=$_POST['form4'];$horaf=$_POST['form5'];$permiso=$_POST['form6'];
            $instructor=$_POST['form7'];$contenido=$_POST['form8'];
            require_once "conexion.php";
            $conexion=conexion();

            $sql2="INSERT INTO th_f_002 VALUES ('','$asunto','$lugar','$instructor','$permiso','$contenido','$fecha','$horai','$horaf','1')";
            $ejecutar2=mysqli_query($conexion, $sql2);
            if($ejecutar2){
                echo 1;
            }else{
                echo 2;
            }
        }

        public function cargar_tabla_temporal(){
            require_once "conexion.php";
            $conexion=conexion();
            unset($_SESSION['tabla_f_002_temp']);
            $id_formato=$_POST['form1']; 

        $sql1="SELECT usuarios.`names`,
                usuarios.lastnames,
                usuarios.cedula,
                th_f_002_cuadrillas.id_registro,
                company.description,
                area_proces.description,
                th_f_002_cuadrillas.id_formato
                FROM th_f_002_cuadrillas
                JOIN usuarios ON usuarios.id_user = th_f_002_cuadrillas.usuario
                JOIN company ON company.id_company = usuarios.company
                JOIN area_proces ON area_proces.id_area = usuarios.`area`
                WHERE th_f_002_cuadrillas.id_formato = '$id_formato'";
                $result1=mysqli_query($conexion,$sql1);
                if(mysqli_num_rows($result1)<=0){//no encontro registrros bd
                  echo 2;//no hay registros
                }else{
                  while ($ver1=mysqli_fetch_row($result1)){
                  $tabla=$ver1[0]."||".
                         $ver1[1]."||".
                         $ver1[2]."||".
                         $ver1[3]."||".
                         $ver1[4]."||".
                         $ver1[5]."||";
                     $_SESSION['tabla_f_002_temp'][]=$tabla;
                   }
                   echo 1;
                }
        }
        
        public function obtener_datos_empleado($id_empleado){
            require_once "conexion.php";
            $conexion=conexion();
            $sql="SELECT usuarios.id_user,
                         usuarios.`names`,
                         usuarios.lastnames,
                         usuarios.cedula,
                         company.description,
                         area_proces.description 
                    from usuarios
                    JOIN company ON company.id_company = usuarios.company
                    JOIN area_proces ON area_proces.id_area = usuarios.`area`
                    WHERE id_user = '$id_empleado'";
            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);
            $datos=array( "id_user" => $ver[0],
                          "names" => $ver[1],
                          "lastnames" => $ver[2],
                          "cedula" => $ver[3],
                          "description1" => $ver[4],
                          "description" => $ver[5]
                            );
                            return $datos;
        }

        public function agregar_registro_de_empleado(){
            $nombre_empleado=$_POST['form1']; 
            $cedula_empleado=$_POST['form2']; 
            $company_empleado=$_POST['form3']; 
            $area_empleado=$_POST['form4'];
            $id_del_formato=$_POST['form5']; $company=0; $area=0;
            require_once "conexion.php";
            $conexion=conexion();
            //verificamos el id de la company
            if($company_empleado == 'Telematica'){ $company=1;}else{$company=2;}
            //verificamos el id del area
            if($area_empleado == 'Prestacion de Servicio'){$area=1;}else if($area_empleado == 'Talento Humano'){$area=2;}else if($area_empleado == 'HSEQ'){$area=3;}else if($area_empleado == 'Logistica'){$area=4;}else {$area=5;}

            $sql="SELECT * FROM usuarios WHERE cedula = '$cedula_empleado'";//verificamos si esta registrado el usuario con el numero de su cedula en la tabla de usuarios
            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);
            if(mysqli_num_rows($result)<=0){//no hay registros lo agregamos y ponemos su registro
                $sql="INSERT INTO usuarios values ('','$nombre_empleado','','$cedula_empleado','$company','$area')";
                $result=mysqli_query($conexion,$sql);
                if($result){
                    echo 3;
                }

            }else{//hay registros, solo agregamos el registro de actividad
                    $id_usuario= "SELECT id_user FROM usuarios where cedula = '$cedula_empleado'";
                    $result1=mysqli_query($conexion,$id_usuario);
                    $ver=mysqli_fetch_row($result1);

                $sql="SELECT * FROM th_f_002_cuadrillas WHERE usuario = '$ver[0]' AND id_formato = '$id_del_formato'";//averiguamos si hay usuarios con la cedula en la lista de la cuadrilla actual
                $result=mysqli_query($conexion,$sql);
                if(mysqli_num_rows($result)<=0){//verificamos si no hay nada
                    $sql="INSERT INTO th_f_002_cuadrillas values ('', '$id_del_formato', '$ver[0]')"; //no hay registros los inserrtamos
                    $result=mysqli_query($conexion,$sql);
                    if($result){
                         echo "1"; 
                        }else{ 
                            echo 0; 
                        }
                }else{// hay registros no hacemos nada y retornamos un 4para hacer algo especial
                    
                        echo 4;
                }

            }
        }
    }
?>