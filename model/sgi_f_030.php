<script>
    function agregar_informe(){
        if($('#actividad').val()=="" || $('#fecha').val()=="" || 
           $('#inspector').val()=="" || $('#rescatista').val()=="" ||
           $('#TIE_serie_1').val()=="" || $('#fecha_cierre').val()=="" ||
           $('#TIE_marca_1').val()=="" || $('#descendedor_2').val()=="" ||
           $('#TIE_serie_2').val()=="" || $('#descendedor_1').val()=="" ||
           $('#TIE_marca_2').val()=="" || $('#bloqueador_1').val()=="" ||
           $('#TIE_serie_3').val()=="" || $('#bloqueador_2').val()=="" ||
           $('#TIE_marca_3').val()=="" || $('#mosquetones').val()=="" ||
           $('#polea_dobles_capacidad_1').val()=="" || $('#arrestador_serie_1').val()=="" ||
           $('#polea_dobles_capacidad_2').val()=="" || $('#arrestador_marca_1').val()=="" ||
           $('#polea_dobles_capacidad_3').val()=="" || $('#arrestador_serie_2').val()=="" ||
           $('#polea_sencilla_capacidad_1').val()=="" || $('#arrestador_marca_2').val()=="" ||
           $('#polea_sencilla_capacidad_2').val()=="" || $('#arrestador_serie_3').val()=="" ||
           $('#apoyo_piso').val()=="" || $('#arrestador_marca_3').val()=="" ||
           $('#cuerda_estatica').val()=="" || $('#cuerda_auxiliar').val()==""){
          message_campos();
          }else{
          cadena="form1=" + $('#actividad').val() +
                "&form2=" + $('#fecha').val() +
                "&form3=" + $('#inspector').val() +
                /* "&form4=" + $('#rescatista').val() +
                "&form5=" + $('#apoyo_piso').val() + */
                "&form6="  + $('input[name="tie1"]:checked').val() +
                "&form7="  + $('input[name="tie2"]:checked').val() +
                "&form8="  + $('input[name="tie3"]:checked').val() +
                "&form12=" + $('input[name="polea_doble_1"]:checked').val() +
                "&form13=" + $('input[name="polea_doble_2"]:checked').val() +
                "&form14=" + $('input[name="polea_doble_3"]:checked').val() +
                "&form15=" + $('input[name="polea_sencilla_1"]:checked').val() +
                "&form16=" + $('input[name="polea_sencilla_2"]:checked').val() +
                "&form17=" + $('input[name="descendedor_1"]:checked').val() +
                "&form18=" + $('input[name="descendedor_2"]:checked').val() +
                "&form19=" + $('input[name="bloqueador_1"]:checked').val() +
                "&form21=" + $('input[name="mosquetones_1"]:checked').val() +
                "&form22=" + $('input[name="arrestador_1"]:checked').val() +
                "&form23=" + $('input[name="arrestador_2"]:checked').val() +
                "&form24=" + $('input[name="arrestador_3"]:checked').val() +
                "&form28=" + $('input[name="cuerda_estatica"]:checked').val() +
                "&form29=" + $('input[name="cuerda_auxiliar"]:checked').val() +
                "&form30=" + $('input[name="adicional_1"]:checked').val() +
                "&form31=" + $('input[name="adicional_2"]:checked').val() +
                "&form32=" + $('input[name="cierre"]:checked').val() +
                "&form33=" + $('#TIE_serie_1').val() +
                "&form34=" + $('#TIE_serie_2').val() +
                "&form35=" + $('#TIE_serie_3').val() +
                "&form36=" + $('#TIE_marca_1').val() +
                "&form37=" + $('#TIE_marca_2').val() +
                "&form38=" + $('#TIE_marca_3').val() +
                "&form39=" + $('#polea_dobles_capacidad_1').val() +
                "&form40=" + $('#polea_dobles_capacidad_2').val() +
                "&form41=" + $('#polea_dobles_capacidad_3').val() +
                "&form42=" + $('#polea_sencilla_capacidad_1').val() +
                "&form43=" + $('#polea_sencilla_capacidad_2').val() +
                "&form44=" + $('#descendedor_1').val() +
                "&form45=" + $('#descendedor_2').val() +
                "&form46=" + $('#bloqueador_1').val() +
                "&form47=" + $('#bloqueador_2').val() +
                "&form48=" + $('#mosquetones').val() +
                "&form49=" + $('#arrestador_serie_1').val() +
                "&form50=" + $('#arrestador_serie_2').val() +
                "&form51=" + $('#arrestador_serie_3').val() +
                "&form52=" + $('#arrestador_marca_1').val() +
                "&form53=" + $('#arrestador_marca_2').val() +
                "&form54=" + $('#arrestador_marca_3').val() +
                "&form55=" + $('#cuerda_estatica').val() +
                "&form56=" + $('#cuerda_auxiliar').val() +
                "&form57=" + $('#adicional_1').val() +
                "&form58=" + $('#adicional_2').val() +
                "&form59=" + $('#fecha_cierre').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_030/agregar_formato_030.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Formato creado con exito, falta coordinador y apoyo en piso");
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