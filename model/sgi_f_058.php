<script>
    function agregar_informe(){
        if($('#actividad').val()=="" || $('#fecha').val()=="" || 
           $('#trabajador').val()=="" || 
           $('#resultado').val()=="" || $('#horas').val()=="" || 
           $('#factor').val()=="" || $('#examen').val()=="" || $('#comida').val()=="" ||
           $('#hora_trabajo').val()=="" || $('#fecha_alturas').val()=="" || 
           $('#hora_actual').val()=="" || $('#alcoholemia').val()=="" ||
           $('#tension').val()=="" || $('#recomendacion').val()==""){
          message_campos();
          }else{
        cadena="form1=" + $('#actividad').val() +
                "&form2=" + $('#fecha').val() +
                "&form3=" + $('#trabajador').val() +
                "&form4=" + $('#medicamento').val() +
                "&form5=" + $('#sintoma').val() +
                "&form6=" + $('#enfermedad').val() +
                "&form7=" + $('#resultado').val() +
                "&form8=" + $('#horas').val() +
                "&form9=" + $('#factor').val() +
                "&form10=" + $('#examen').val() +
                "&form11=" + $('#alcohol').val() +
                "&form12=" + $('#comida').val() +
                "&form13=" + $('#hora_trabajo').val() +
                "&form14=" + $('#fecha_alturas').val() +
                "&form15=" + $('#hora_actual').val() +
                "&form16=" + $('#alcoholemia').val() +
                "&form17=" + $('#tension').val() +
                "&form18=" + $('#recomendacion').val() +
                "&form19="  + $('input[name="p-01"]:checked').val()+
                "&form20="  + $('input[name="p-02"]:checked').val()+
                "&form21="  + $('input[name="p-03"]:checked').val()+
                "&form22="  + $('input[name="p-04"]:checked').val()+
                "&form23="  + $('input[name="p-05"]:checked').val()+
                "&form24="  + $('input[name="p-06"]:checked').val()+
                "&form25="  + $('input[name="p-07"]:checked').val()+
                "&form26="  + $('input[name="p-08"]:checked').val()+
                "&form27="  + $('input[name="p-09"]:checked').val()+
                "&form28="  + $('input[name="p-10"]:checked').val()+
                "&form29="  + $('input[name="p-11"]:checked').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_058/agregar_formato_058.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Registro exitoso, quedan 4 puestos disponibles para agregar personal");
                      setTimeout ("location.reload();", 2000);
                      return false;
                    }else if(r==2){
                      message_error();
                    }else{
                      message_alerta();
                    }
                  }
                });
            }
    }

        function message_error(){
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