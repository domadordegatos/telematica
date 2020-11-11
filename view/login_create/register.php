
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

          <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          $conexion=conexion();
          ?>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      html,
body {
  height: 100%;
}

/* body {
  display: -ms-flexbox;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
} */

.form-signin {
  width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

  </head>



  <body class="text-center">

    <?php
          require_once "../menus/index.php";
          ?>
          <div class="container-x d-flex justify-content-between">
            <form class="form-signin" style="background-color: #fff; border-radius: 10px; box-shadow: 0 14px 28px rgba(0,0,0,0.25),  0 10px 10px rgba(0,0,0,0.22);">
          <img class="mb-4" src="../media/photos/logo.png" alt="" width="200" height="200">
          <h1 class="h3 mb-3 font-weight-normal">Registro de usuarios Telematica</h1>
          <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Nombres" id="nombres" />
                        <input class="form-control" type="text" placeholder="Apellidos" id="apellidos" />
                        <input class="form-control" type="number" placeholder="Cedula" id="cedula" />
                        <input class="form-control" type="text" placeholder="Usuario" id="usuario" />
                        <input class="form-control" type="password" placeholder="Password" id="password"/>
        
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control" id="compania">
                                <option class="entrada" value="A">Compañia</option>
                                <?php $sql="SELECT * FROM company";
                                $result=mysqli_query($conexion,$sql);
                                while ($ver=mysqli_fetch_row($result)):?>
                                <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                                <?php endwhile; ?>
                      </select>
                <select class="form-control" id="area">
                                <option class="entrada" value="A">Area</option>
                                <?php $sql="SELECT * FROM area_proces";
                                $result=mysqli_query($conexion,$sql);
                                while ($ver=mysqli_fetch_row($result)):?>
                                <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                                <?php endwhile; ?>
                      </select>
                <select class="form-control" id="cargo">
                                <option class="entrada" value="A">Cargo</option>
                                <?php $sql="SELECT * FROM cargos";
                                $result=mysqli_query($conexion,$sql);
                                while ($ver=mysqli_fetch_row($result)):?>
                                <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                                <?php endwhile; ?>
                      </select>
                <select class="form-control" id="rol">
                                <option class="entrada" value="A">Rol</option>
                                <?php $sql="SELECT * FROM roles_users";
                                $result=mysqli_query($conexion,$sql);
                                while ($ver=mysqli_fetch_row($result)):?>
                                <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                                <?php endwhile; ?>
                      </select>
        
                        
                    </div>
                </div>
                
          <div class="checkbox mb-3">
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="button" onclick="register()">Registrar Usuario</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>

        <form action="../../model/firma.php" method="POST"  enctype="multipart/form-data" class="form-group" style="margin:auto;">
          <div class="contenedor border p-3 rounded">
            <h2>Añade la firma del nuevo usuario</h2>
            <small class="form-text text-muted mb-2">Solo formato PNG, resolucion 250px ancho, 50px alto</small>
            <input class="form-control" type="file" name="firma" style="overflow: hidden;" id="firma">
            <input type="text" id="cedulaoculta" name="cedulaoculta" value="" hidden>
            <button type="submit" class="btn btn-info mt-3" style="display: none;" id="agregar_firma">Añadir firma</button>
          </div>

        </form>
          </div>
</body>
</html>

<script>
	function register(){
    
    if($('#nombres').val()=="" || $('#apellidos').val()=="" ||
       $('#cedula').val()=="" || $('#usuario').val()=="" ||
       $('#password').val()=="" || $('#compania').val()=="" ||
       $('#area').val()=="" || $('#cargo').val()=="" ||
       $('#rol').val()==""){
          message_campos();
          }else{
		cadena="form1=" + $('#nombres').val()+
			  "&form2=" + $('#apellidos').val()+
			  "&form3=" + $('#cedula').val()+
			  "&form4=" + $('#usuario').val()+
			  "&form5=" + $('#password').val()+
			  "&form6=" + $('#compania').val()+   
			  "&form7=" + $('#area').val()+
			  "&form8=" + $('#cargo').val()+
			  "&form9=" + $('#rol').val();
                  $.ajax({
                  type:"POST",
                  url:"../../controller/login/register.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Usuario creado con exito, añade la firma");
                      document.getElementById("agregar_firma").style.display = 'block';
                      document.getElementById("nombres").value = "";
                      document.getElementById("apellidos").value = "";
                      document.getElementById("cedula_oculta").value = $('#cedula').val();
                      document.getElementById("usuario").value = "";
                      document.getElementById("password").value = "";
                      document.getElementById("firma").value = "";
                      return false;
                    }else if(r==2){
                      alertify.error("Usuario existente");
                      return false;
                      document.getElementById("cedula").value = "";
                      document.getElementById("usuario").value = "";
                    }else{
					            alertify.error("Error de sistema");
                      return false;
					}
                  }
                });
              }
  }
  function message_campos(){
        alertify.error("Por favor usa todos los campos");
        return false;
      }
</script>
