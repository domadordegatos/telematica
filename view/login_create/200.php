<!DOCTYPE html>
<html lang="en">
<head>
<?php
          require_once "../menus/index.php";
          ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <?php require_once "../libraries/lib.php";?>
</head>
<body>
    <div class="container text-center mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Registro exitoso!</h1>
            <p class="lead">Este usuario ya esta activo y con firma</p>
            <hr class="my-4">
            <p>Puedes ir al menu de edicion en la parte superior y verificar que todos los campos correspondan</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="http://localhost/telematica/view/login_create/register.php" role="button">Registrar mas usuarios...</a>
            </p>
          </div>
    </div>
    
</body>
</html>