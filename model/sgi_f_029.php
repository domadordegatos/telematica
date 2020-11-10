<script>
    function agregar_informe(){
        cadena="form1=" + $('#actividad').val() +
                "&form2=" + $('#fecha').val() +
                "&form3=" + $('#aprobacion').val() +
                "&form4=" + $('#observaciones').val() +
                "&form5=" + $('#revisado').val() +
                 "&form6="  + $('input[name="p-01"]:checked').val()+
                 "&form7="  + $('input[name="p-02"]:checked').val()+
                 "&form8="  + $('input[name="p-03"]:checked').val()+
                 "&form9="  + $('input[name="p-04"]:checked').val()+
                "&form10="  + $('input[name="p-05"]:checked').val()+
                "&form11="  + $('input[name="p-06"]:checked').val()+
                "&form12="  + $('input[name="p-07"]:checked').val()+
                "&form13="  + $('input[name="p-08"]:checked').val()+
                "&form14="  + $('input[name="p-09"]:checked').val()+
                "&form15="  + $('input[name="p-10"]:checked').val()+
                "&form16="  + $('input[name="p-11"]:checked').val()+
                "&form17="  + $('input[name="p-12"]:checked').val()+
                "&form18="  + $('input[name="p-13"]:checked').val()+
                "&form19="  + $('input[name="p-14"]:checked').val()+
                "&form20="  + $('input[name="p-15"]:checked').val()+
                "&form21="  + $('input[name="p-16"]:checked').val()+
                "&form22="  + $('input[name="p-17"]:checked').val()+
                "&form23="  + $('input[name="p-18"]:checked').val()+
                "&form24="  + $('input[name="p-19"]:checked').val()+
                "&form25="  + $('input[name="p-20"]:checked').val()+
                "&form26="  + $('input[name="p-21"]:checked').val()+
                "&form27="  + $('input[name="p-22"]:checked').val()+
                "&form28="  + $('input[name="p-23"]:checked').val()+
                "&form29=" + $('#user').val()+
                "&form30=" + $('#serial').val() +
                "&form31=" + $('#fecha_fabricacion').val() +
                "&form32=" + $('#serial_eslinga').val() +
                "&form33=" + $('#fecha_fabricacion_eslinga').val() +
                "&form34=" + $('#serial_eslinga_posicionamiento').val() +
                "&form35=" + $('#fecha_fabricacion_eslinga_posicionamiento').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_029/agregar_formato_029.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Registro exitoso, quedan 4 puestos disponibles para agregar personal");
                      document.getElementById("actividad").value = "";
                      document.getElementById("fecha").value = "";
                      document.getElementById("aprobacion").value = "";
                      document.getElementById("observaciones").value = "";
                      document.getElementById("revisado").value = "";
                      document.getElementById("serial").value = "";
                      document.getElementById("fecha_fabricacion").value = "";
                      document.getElementById("serial_eslinga").value = "";
                      document.getElementById("fecha_fabricacion_eslinga").value = "";
                      document.getElementById("serial_eslinga_posicionamiento").value = "";
                      document.getElementById("fecha_fabricacion_eslinga_posicionamiento").value = "";
                      return false;
                    }else if(r==2){
                      message_error();
                    }else{
                      message_alerta();
                    }
                  }
                });
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