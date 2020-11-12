<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "../menus/index.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <?php require_once "../libraries/lib.php";
    
    $sql="SELECT usuarios.id_user, usuarios.`names`, usuarios.lastnames, usuarios.cedula, login_users.estado, usuarios.firma FROM usuarios
    JOIN login_users ON login_users.id_user = usuarios.credenciales";
    $result=mysqli_query($conexion,$sql);
    ?>
</head>
<body>
    <?php if($ver[0] == 1){ ?>
    <div class="container-x d-flex justify-content-between" style="width: 100%;">
        <div class="parte1 m-4 " style="width: 50%;">
            <h2>Trabajadores Telematica</h2>
            <table class="table table-bordered table-sm">
                <tr class="table-info">
                    <td>Id</td>
                    <td>Apellidos</td>
                    <td>Nombres</td>
                    <td>Cedula</td>
                    <td>Estado</td>
                    <td>Firma</td>
                    <td>Editar</td>
                </tr>
                <?php while ($ver=mysqli_fetch_row($result)): ?>
                <tr>
                    <td><?php echo $ver[0]; ?></td>
                    <td><?php echo $ver[1]; ?></td>
                    <td><?php echo $ver[2]; ?></td>
                    <td><?php echo $ver[3]; ?></td>
                    <?php if($ver[4] == 1){ ?><td class="bg-info text-white">Activo</td><?php }else{ ?><td class="bg-danger text-white">Inactivo</td><?php } ?>
                    <td><img src="../media/firmas/<?php echo $ver[5]; ?>.png" width="90px" alt="<?php echo $ver[5]; ?>"></td>
                    <td><a class="btn btn-sm btn-warning" onclick="llamar_informacion('<?php echo $ver[0]; ?>')">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg>
                        Editar</a></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="parte2 m-4" id="datos" style="width: 50%; margin: auto;">
        <div class="formulario form-group">
                    <h2>Datos del usuario</h2>
                <div class="row mt-2">
                    <div class="col-sm-4">Usuario</div>
                    <div class="col-sm-8">
                        <input type="text" id="usuario" class="form-control form-control-sm" >
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Contraseña</div>
                    <div class="col-sm-8">
                        <input type="text" id="contrasena" class="form-control form-control-sm" >
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Estado</div>
                    <div class="col-sm-8">
                        <select name="" id="estado" class="form-control">
                          <option value="1">Activo</option>
                          <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Rol</div>
                    <div class="col-sm-8">
                        <select class="form-control" id="rol">
                            <option value="">Rol</option>
                            <?php $sql="SELECT * FROM roles_users";
                            $result=mysqli_query($conexion,$sql);
                            while ($ver=mysqli_fetch_row($result)):?>
                            <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                            <?php endwhile; ?>
                  </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Nombres</div>
                    <div class="col-sm-8">
                        <input type="text" id="nombres" class="form-control form-control-sm" >
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Apellidos</div>
                    <div class="col-sm-8">
                        <input type="text" id="apellidos" class="form-control form-control-sm" >
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Cedula</div>
                    <div class="col-sm-8">
                        <input type="text" id="cedula" class="form-control form-control-sm" >
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Compañia</div>
                    <div class="col-sm-8">
                        <select class="form-control" id="compania">
                            <option class="entrada" value="A">Compañia</option>
                            <?php $sql="SELECT * FROM company";
                            $result=mysqli_query($conexion,$sql);
                            while ($ver=mysqli_fetch_row($result)):?>
                            <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                            <?php endwhile; ?>
                  </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Area</div>
                    <div class="col-sm-8">
                        <select class="form-control" id="area">
                            <option class="entrada" value="A">Area</option>
                            <?php $sql="SELECT * FROM area_proces";
                            $result=mysqli_query($conexion,$sql);
                            while ($ver=mysqli_fetch_row($result)):?>
                            <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                            <?php endwhile; ?>
                  </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">Cargo</div>
                    <div class="col-sm-8">
                        <select class="form-control" id="cargo">
                            <option class="entrada" value="A">Cargo</option>
                            <?php $sql="SELECT * FROM cargos";
                            $result=mysqli_query($conexion,$sql);
                            while ($ver=mysqli_fetch_row($result)):?>
                            <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                            <?php endwhile; ?>
                  </select>
                  <input type="text" id="id_user" hidden>
                    </div>
                </div>
                <button class="btn btn-lg btn-block btn-success my-3" onclick="actualizar_usuario()">Editar Usuario</button>
            </div>
        </div>
    </div><?php } ?>
    
</body>
</html>

<script>
    function llamar_informacion (id){
        cadena="id_empleado=" + id;
        $.ajax({
          type:"POST",
          data:cadena,
          url:"../../controller/login/ob_datos_usuario.php",
          success:function(r){
            dato=jQuery.parseJSON(r);
              $('#usuario').val(dato['10']);
              $('#contrasena').val(dato['11']);
              $('#estado').val(dato['12']);
              $('#rol').val(dato['13']);
              $('#nombres').val(dato['1']);
              $('#apellidos').val(dato['2']);
              $('#cedula').val(dato['3']);
              $('#compania').val(dato['4']);
              $('#area').val(dato['5']);
              $('#cargo').val(dato['6']);
              $('#id_user').val(dato['0']);
          }
        });
    }

    function actualizar_usuario(){
      if($('#usuario').val()=="" || $('#contrasena').val()=="" ||
       $('#estado').val()=="" || $('#rol').val()=="" ||
       $('#nombres').val()=="" || $('#apellidos').val()=="" ||
       $('#cedula').val()=="" || $('#compania').val()=="" ||
       $('#area').val()=="" || $('#cargo').val()==""){
          message_campos();
          }else{
            cadena="form1=" + $('#usuario').val()+
                  "&form2=" + $('#contrasena').val()+
                  "&form3=" + $('#estado').val()+
                  "&form4=" + $('#rol').val()+
                  "&form5=" + $('#nombres').val()+
                  "&form6=" + $('#apellidos').val()+   
                  "&form7=" + $('#cedula').val()+
                  "&form8=" + $('#compania').val()+
                  "&form9=" + $('#area').val()+
                  "&form10=" + $('#cargo').val()+
                  "&form11=" + $('#id_user').val();
                  $.ajax({
                  type:"POST",
                  url:"../../controller/login/actualizar_user.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Usuario Actualizado con exito!");
                      return false;
                    }else if(r==2){
                      alertify.error("Error en la BD");
                      return false;
                    }
                  }
                });
              }
  }
</script>