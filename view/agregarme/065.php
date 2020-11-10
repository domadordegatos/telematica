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
    $sql="SELECT * FROM sgi_f_065 WHERE id_065_principal = '$id_del_formato_recuperado' AND (integrante2 IS NULL
                                           OR integrante3 IS NULL OR integrante4 IS NULL OR integrante5 IS NULL)";
        $ejecutar=mysqli_query($conexion, $sql);
        if(mysqli_num_rows($ejecutar)<=0){$personal=1;}
        
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" value="<?php echo $id_del_formato_recuperado; ?>" id="id_formato" hidden>
    <style> .card-img-top{padding: 2rem;}</style>
    <div class="contianer d-flex  justify-content-around mt-5">
    <?php if($personal == '0'){ ?>
        <div class="card text-center border border-primary" style="width: 18rem;">
            <img class="card-img-top" src="../media/add/alturas.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Personal Ejecutante</h5>
              <div class="row"> <div class="col-sm-12">EPP</div></div>
              <div class="row"> <div class="col-sm-12"><label for="" class="mr-1">SI</label><input type="radio" name="epp" value="SI" checked>
                                                       <label for="" class="mr-1">NO</label><input type="radio" name="epp" value="NO"></div></div>
              <a onclick="agregarme_como_personal()" class="btn btn-primary">Agregarme</a>
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
    function agregarme_como_personal(){
        cadena="form1=" + $('#id_formato').val()+
               "&form2=" + $('input[name="epp"]:checked').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/065/personal.php", //validacion de datos de registro
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
                  url:"../../controller/agregarme/065/deshabilitar.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Formato listo para imprimir");
                      setTimeout ("history.back(1);", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Ya estas registrado como personal");
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