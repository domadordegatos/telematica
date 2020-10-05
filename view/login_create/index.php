<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Telematica Access</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css"/>
 		 <?php 
          require_once "../../model/conexion.php";
          /* require_once "../index.php"; */
          $conexion=conexion();
          ?>
</head>
<body>



<!-- partial:index.partial.html -->
<h2 id="title2">Bienvenido, desde aqui puedes iniciar sesión o crear una cuenta</h2>
<div class="containerr" id="containerr">
	<div class="form-container sign-up-container">
		<form class="forma">
			<h1 id="title">Crear Cuenta</h1>
			<div class="social-container">
			</div>
			<span>Estos son algunos datos</span>
			<input class="entrada" type="text" placeholder="Nombres" id="nombres" />
			<input class="entrada" type="text" placeholder="Apellidos" id="apellidos" />
			<input class="entrada" type="number" placeholder="Cedula" id="cedula" />
			<input class="entrada" type="text" placeholder="Usuario" id="usuario" />
			<input class="entrada" type="password" placeholder="Password" id="password"/>
			<select class="entrada" id="compania">
                      <option class="entrada" value="A">Compañia</option>
                      <?php $sql="SELECT * FROM company";
                      $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)):?>
                      <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                      <?php endwhile; ?>
            </select>
			<select class="entrada" id="area">
                      <option class="entrada" value="A">Area</option>
                      <?php $sql="SELECT * FROM area_proces";
                      $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)):?>
                      <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                      <?php endwhile; ?>
            </select>
			<select class="entrada" id="cargo">
                      <option class="entrada" value="A">Cargo</option>
                      <?php $sql="SELECT * FROM cargos";
                      $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)):?>
                      <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                      <?php endwhile; ?>
            </select>
			<select class="entrada" id="rol">
                      <option class="entrada" value="A">Rol</option>
                      <?php $sql="SELECT * FROM roles_users";
                      $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)):?>
                      <option class="entrada" value=<?php echo $ver[0]; ?>><?php echo $ver[1]?></option>
                      <?php endwhile; ?>
            </select>

			<button class="boton" type="button" onclick="register()">Crear</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form class="forma">
			<h1 id="title" id="title">Iniciar</h1>
			<div class="social-container">
			</div>
			<span>Ingresa tus credenciales</span>
			<input class="entrada" type="text" id="i_email" placeholder="Usuario" />
			<input class="entrada" type="password" id="i_password" placeholder="Contraseña" />
			<a id="link" href="">Forgot your password?</a>
			<button class="boton" type="button" onclick="login()" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<img src="../media/photos/logo.png" alt="" width="70%">
				<h1 id="title">TELEMATICA</h1>
				<p id="parrafo">Siempre revisa la informacion de quien agregas</p>
				<button class="boton" class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<img src="../media/photos/logo.png" alt="" width="70%">
				<h1 id="title">TELEMATICA</h1>
				<p id="parrafo">Siempre puedes crear una cuenta si lo requieres</p>
				<button class="boton" class="ghost" id="signUp">Crear</button>
			</div>
		</div>
	</div>
</div>

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
<script>
	function login(){
		cadena="form1=" + $('#i_email').val()+
			  "&form2=" + $('#i_password').val();
                  $.ajax({
                  type:"POST",
                  url:"../../controller/login/iniciar.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      window.location="../menu.php";
                    }else if(r==2){
                      alertify.error("Usuario o contraseña invilidos, por favor verifica");
                      return false;
                    }else if(r==3){
                      alertify.error("Su usuario esta desactivado");
                      return false;
                    }else{
					            alertify.error("Error de sistema");
                      return false;
					}
                  }
                });
	}
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
                      document.getElementById("nombres").value = "";
                      document.getElementById("apellidos").value = "";
                      document.getElementById("cedula").value = "";
                      document.getElementById("usuario").value = "";
                      document.getElementById("password").value = "";
                      alertify.success("Usuario creado con exito");
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
