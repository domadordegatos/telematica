
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

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
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
    <form class="form-signin" style="background-color: #fff; border-radius: 10px; box-shadow: 0 14px 28px rgba(0,0,0,0.25),  0 10px 10px rgba(0,0,0,0.22);">
    <img class="mb-4" src="../media/photos/logo.png" alt="" width="200" height="200">
  <h1 class="h3 mb-3 font-weight-normal">Telematica Inicio de sesión</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="i_email" class="form-control" placeholder="Usuario" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="i_password" class="form-control" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="button" onclick="login()">Iniciar Sesión</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
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
                      window.location="../menus/menu.php";
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
