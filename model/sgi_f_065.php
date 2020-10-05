<script>
    function agregar_informe(){
        if($('#lugar').val()=="" || $('#lider_1').val()=="" || 
           $('#emergencia').val()=="" || $('#telefono').val()=="" ||
           $('#descripcion').val()=="" || $('#observaciones').val()=="" || $('#lider_2').val()==""){
          message_campos();
          }else{
          cadena= "form1=" + $('#lugar').val() +
                 "&form2=" + $('#lider_1').val() +
                 "&form3=" + $('#emergencia').val() +
                 "&form4=" + $('#telefono').val() +
                 "&form5=" + $('#descripcion').val() +
                 "&form6=" + $('#per_01').val() +
                 "&form7=" + $('#per_02').val() +
                 "&form8=" + $('#per_03').val() +
                 "&form9=" + $('#per_04').val() +
                "&form10=" + $('#per_05').val() +
                "&form11=" + $('#observaciones').val() +
                "&form12=" + $('#lider_2').val() +
                "&form66="  + $('input[name="ch_01"]:checked').val()+
                "&form67="  + $('input[name="ch_02"]:checked').val()+
                "&form68="  + $('input[name="ch_03"]:checked').val()+
                "&form69="  + $('input[name="ch_04"]:checked').val()+
                "&form70="  + $('input[name="ch_05"]:checked').val()+
                "&form71="  + $('input[name="ch_06"]:checked').val()+
                "&form72="  + $('input[name="ch_07"]:checked').val()+
                "&form73="  + $('input[name="ch_08"]:checked').val()+
                "&form74="  + $('input[name="ch_09"]:checked').val()+
                "&form75="  + $('input[name="ch_10"]:checked').val()+
                "&form76="  + $('input[name="ch_11"]:checked').val()+
                "&form77="  + $('input[name="ch_12"]:checked').val()+
                "&form79="  + $('input[name="ch_13"]:checked').val()+
                "&form80="  + $('input[name="ch_14"]:checked').val()+
                "&form81="  + $('input[name="ch_15"]:checked').val()+
                "&form82="  + $('input[name="ch_16"]:checked').val()+
                "&form83="  + $('input[name="ch_17"]:checked').val()+
                "&form84="  + $('input[name="per_01"]:checked').val()+
                "&form85="  + $('input[name="per_02"]:checked').val()+
                "&form86="  + $('input[name="per_03"]:checked').val()+
                "&form87="  + $('input[name="per_04"]:checked').val()+
                "&form88="  + $('input[name="per_05"]:checked').val()+
                "&form89="  + $('input[name="cr_01"]:checked').val()+
                "&form90="  + $('input[name="cr_02"]:checked').val()+
                "&form91="  + $('input[name="cr_03"]:checked').val()+
                "&form92="  + $('input[name="cr_04"]:checked').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_065/agregar_formato_065.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      message_exito();
                      document.getElementById("lugar").value = "";
                      document.getElementById("lider_1").value = "";
                      document.getElementById("emergencia").value = "";
                      document.getElementById("telefono").value = "";
                      document.getElementById("descripcion").value = "";
                      document.getElementById("observaciones").value = "";
                      document.getElementById("lider_2").value = "";
                      
                    }else if(r==2){
                      message_error();
                    }else{
                      message_alerta();
                    }
                  }
                });
                }
      }

      function message_exito(){
        alertify.success("Registro exitoso");
        return false;
      } function message_error(){
        alertify.error("Error al registrar en base de datos");
        return false;
      } function message_alerta(){
        alertify.error("Error desconocido ");
        return false;
      } function message_campos(){
        alertify.error("Por favor usa todos los campos");
        return false;
      }

</script>