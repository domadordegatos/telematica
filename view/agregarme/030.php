<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
    require_once "../../model/conexion.php"; 
    $conexion=conexion();
    $id_del_formato_recuperado=$_REQUEST['id_formato'];
    $personal=0;$coordinador=0;$rescatista=0;
    
    $sql1="SELECT * FROM sgi_f_030 WHERE id_030_principal = '$id_del_formato_recuperado' AND (apoyo_piso is NULL)";
    $ejecutar1=mysqli_query($conexion, $sql1);
    if(mysqli_num_rows($ejecutar1)<=0){$coordinador=1;}

    $sql2="SELECT * FROM sgi_f_030 WHERE id_030_principal = '$id_del_formato_recuperado' AND (rescatista is NULL)";
    $ejecutar2=mysqli_query($conexion, $sql2);
    if(mysqli_num_rows($ejecutar2)<=0){$rescatista=1;}
        
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" value="<?php echo $id_del_formato_recuperado; ?>" id="id_formato" hidden>
    <style> .card-img-top{padding: 2rem;}</style>
    <div class="contianer d-flex  justify-content-around mt-5">

        <?php if($coordinador == '0'){ ?>
        <div class="card text-center border border-primary" style="width: 18rem;">
            <img class="card-img-top" src="../media/add/coordinador.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Apoyo en Piso</h5>
              <a onclick="agregarme_como_coordinador()" class="btn btn-primary">Agregarme</a>
            </div>
        </div>
        <?php } ?>

        <?php if($rescatista == '0'){ ?>
        <div class="card text-center border border-primary" style="width: 18rem;">
            <img class="card-img-top" src="../media/add/rescue.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Rescatista</h5>
              <a onclick="agregarme_como_rescatista()" class="btn btn-primary">Agregarme</a>
            </div>
        </div>
        <?php } ?>

        <div class="card text-center border border-primary" style="width: 18rem;">
            <img class="card-img-top" src="../media/add/off.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Puedes finalizar este formato si ya esta completo</h5>
              <a onclick="deshabilitar()" class="btn btn-primary">Terminarlo</a>
            </div>
        </div>
    </div>
    
</body>
</html>

<script>
    function agregarme_como_coordinador(){
        cadena="form1=" + $('#id_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/030/apoyo_piso.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Registro Exitoso");
                      setTimeout ("location.reload();", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estar registrado como personal");
                      return false;
                    }else if(r==3){
                      alertify.error("Error de bd");
                      return false;
                    }else{
                      alertify.error("Error desconocido");
                      return false;
                    }
                  }
                });
    }
    function agregarme_como_rescatista(){
        cadena="form1=" + $('#id_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/030/rescatista.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Registro Exitoso");
                      setTimeout ("location.reload();", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estar registrado como personal");
                      return false;
                    }else if(r==3){
                      alertify.error("Error de bd");
                      return false;
                    }else{
                      alertify.error("Error desconocido");
                      return false;
                    }
                  }
                });
    }
    function deshabilitar(){
        cadena="form1=" + $('#id_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/030/deshabilitar.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Formato listo para imprimir");
                      setTimeout ("history.back(1);", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estar registrado como personal");
                      return false;
                    }else if(r==3){
                      alertify.error("Error de bd");
                      return false;
                    }else{
                      alertify.error("Error desconocido");
                      return false;
                    }
                  }
                });
    }
</script>