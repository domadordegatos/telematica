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
        <div class="jumbotron" style="background-color: #ff8282;">
            <h1 class="display-4">REGISTRO FALLIDO! 
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8z"/>
            </svg>
            </h1>
            <p class="lead">Hubo un problema en el proceso o tu firma simplemente no cumple los requisitos</p>
            <hr class="my-4">
            <p>Puedes ir al menu de edicion en la parte superior y verificar que todos los campos correspondan, si solo hace falta la firma, puedes agregarla manualmente</p>
            <p class="lead">
              <a class="btn btn-danger btn-lg" onclick="javascript:history.back(1)" role="button">Volver a cargar la firma</a>
            </p>
          </div>
    </div>
    
</body>
</html>