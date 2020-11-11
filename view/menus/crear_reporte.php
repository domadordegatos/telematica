<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php";
          require_once "../../model/th_f_002.php";
          $conexion=conexion();
          ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telematica Addme</title>
    
</head>
<body>
    <style>
        body{
            background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("../media/photos/logo.png");
            background-size: contain; 
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
<div class="container mt-5">
    <h2 class="display-6 text-center mt-3">Crea un formato segun su tipo</h1>
        <div class="segment1 border rounded border-primary mt-5 p-4" class="border" style="background-color: #fff; border-radius: 10px; box-shadow: 0 14px 28px rgba(0,0,0,0.25),  0 10px 10px rgba(0,0,0,0.22);">
            <h2 class="text-center mb-5">Trabajo en Piso
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-flag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                  </svg>
            </h2>
            <div class="contenedor1 text-center d-flex justify-content-around">
                <a class="btn btn-info" href="../TH_F_002/index.php?id_formato=A" >TH_F_002</a>
                <a class="btn btn-info" href="../SGI_F_065/index.php" >SGI_F_065</a>
                <a class="btn btn-info" href="../SGI_F_037/index.php" >SGI_F_037</a>
            </div>
        </div>
        <div class="segment2 border rounded border-primary mt-5 p-4" class="border" style="background-color: #fff; border-radius: 10px; box-shadow: 0 14px 28px rgba(0,0,0,0.25),  0 10px 10px rgba(0,0,0,0.22);">
            <h2 class="text-center mb-5">Trabajo en Alturas 
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ladder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.5 1a.5.5 0 0 1 .5.5V2h6v-.5a.5.5 0 0 1 1 0v14a.5.5 0 0 1-1 0V15H5v.5a.5.5 0 0 1-1 0v-14a.5.5 0 0 1 .5-.5zM5 14h6v-2H5v2zm0-3h6V9H5v2zm0-3h6V6H5v2zm0-3h6V3H5v2z"/>
                  </svg>
            </h2>
            <div class="contenedor2 text-center">
                <a class="btn btn-info" href="../TH_F_002/index.php?id_formato=A" >TH_F_002</a>
                <a class="btn btn-info" href="../SGI_F_065/index.php" >SGI_F_065</a>
                <a class="btn btn-info" href="../SGI_F_037/index.php" >SGI_F_037</a>
                <a class="btn btn-info" href="../SGI_F_030/index.php" >SGI_F_030</a>
                <a class="btn btn-info" href="../SGI_F_059/index.php" >SGI_F_059</a>
                <a class="btn btn-info" href="../SGI_F_058/index.php" >SGI_F_058</a>
                <a class="btn btn-info" href="../SGI_F_029/index.php" >SGI_F_029</a>
            </div>
        </div>
    </div>
</body>
</html>

