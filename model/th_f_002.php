<script>
    $(document).ready(function(){
      $('#empleado_id').change(function(){
        $.ajax({
          type:"POST",
          data:"id_empleado=" +$('#empleado_id').val(),
          url:"../../controller/login/ob_datos_usuario.php",
          success:function(r){
            dato=jQuery.parseJSON(r);
              $('#nombre_empleado').val(dato['names']+" "+dato['lastnames']);
              $('#cedula_empleado').val(dato['cedula']);
              $('#company_empleado').val(dato['description1']);
              $('#area_empleado').val(dato['description']);
          }
        });
      });

      $('#formato_id').change(function(){
          var id = document.getElementById("formato_id").value;
          window.location = '../th_f_002/index.php?id_formato='+id;
      });
      $('#formato_id_030').change(function(){
          var id = document.getElementById("formato_id_030").value;
          window.location = '../agregarme/030.php?id_formato='+id;
      });
      $('#formato_id_058').change(function(){
          var id = document.getElementById("formato_id_058").value;
          window.location = '../agregarme/058.php?id_formato='+id;
      });
      $('#formato_id_065').change(function(){
          var id = document.getElementById("formato_id_065").value;
          window.location = '../agregarme/065.php?id_formato='+id;
      });
      $('#formato_id_059').change(function(){
          var id = document.getElementById("formato_id_059").value;
          window.location = '../agregarme/059.php?id_formato='+id;
      });
      $('#formato_id_029').change(function(){
          var id = document.getElementById("formato_id_029").value;
          window.location = '../agregarme/029.php?id_formato='+id;
      });

    });

    $(document).ready(function(){
	  	$('#tabla_002').load("listado_temporal.php");
  	});

    function limpiar_campos_empleado(){
        document.getElementById("nombre_empleado").value = "";
        document.getElementById("cedula_empleado").value = "";
        document.getElementById("company_empleado").value = "";
        document.getElementById("area_empleado").value = "";
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

      function cargar_tabla_temporal(){
        ocultar_segmento_3();//llamo al proceso de ocultar segmento verificando si es para agregar registro o crear un formato
        cadena="form1=" + $('#identificador_del_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/th_f_002/cargar_tabla_temporal.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      $('#tabla_002').load("listado_temporal.php");
                    }else if(r==2){
                      $('#tabla_002').load("listado_temporal.php");
                    }
                  }
                });
      }
      function cargar_tabla_temporall(){
        ocultar_segmento_3();//llamo al proceso de ocultar segmento verificando si es para agregar registro o crear un formato
        cadena="form1=" + $('#identificador_del_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../../controller/th_f_002/cargar_tabla_temporal.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      $('#tabla_002').load("../../th_f_002/listado_temporal.php");
                    }else if(r==2){
                      $('#tabla_002').load("../../th_f_002/listado_temporal.php");
                    }
                  }
                });
      }

      function desactivar_002(){
        cadena="form1=" + $('#identificador_del_formato').val();
                  $.ajax({
                  type:"POST",
                  url:"../../controller/th_f_002/desactivar_formato_002.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      alertify.success("Formato desactivado con exito");
                      setTimeout ("history.back(1);", 2000);
                      return false;
                    }else if(r==2){
                      alertify.error("Error al desactivar");
                      return false;
                    }
                  }
                });
      }

      function ocultar_segmento_3(){
        var id = document.getElementById("identificador_del_formato").value;
        if(id === 'A'){
          document.getElementById("semento_3").style.display = 'none';
        }
      }

      function agregar_registro_empleado(){
        if($('#nombre_empleado').val()=="" || $('#cedula_empleado').val()=="" || $('#company_empleado').val()=="" || $('#area_empleado').val()==""){
          message_campos();
          }else{
          cadena="form1=" + $('#nombre_empleado').val() +
                "&form2=" + $('#cedula_empleado').val() +
                "&form3=" + $('#company_empleado').val() +
                "&form4=" + $('#area_empleado').val() +
                "&form5=" + $('#identificador_del_formato').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/th_f_002/agregar_registro.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      cargar_tabla_temporal();
                      $('#tabla_002').load("listado_temporal.php");
                      message_exito();
                      limpiar_campos_empleado();
                    }else if(r==0){
                      message_error();
                    }else if(r==3){
                      agregar_registro_empleado();
                    }else if(r==4){
                      alertify.error("Ya estas en la lista");
                      return false;
                    }else{
                      message_alerta();
                    }
                  }
                });
                }
      }

      function agregar_formato_th_f_002(){
        if($('#fecha_form').val()=="" || $('#lugar_form').val()=="" ||
           $('#hora_inicio_form').val()=="" || $('#hora_fin_form').val()=="" ||
           $('#numero_permiso_form').val()=="" || $('#instructor').val()=="" || $('#contenido_form').val()==""){
          message_campos();
          var fm1 = $('input[name="rating1"]:checked').val();
          }else{
          cadena="form1=" + $('input[name="asunto"]:checked').val() +
                "&form2=" + $('#fecha_form').val() +
                "&form3=" + $('#lugar_form').val() +
                "&form4=" + $('#hora_inicio_form').val() +
                "&form5=" + $('#hora_fin_form').val() +
                "&form6=" + $('#numero_permiso_form').val() +
                "&form7=" + $('#instructor').val() +
                "&form8=" + $('#contenido_form').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/th_f_002/agregar_formato.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      document.getElementById("fecha_form").value = "";
                      document.getElementById("lugar_form").value = "";
                      document.getElementById("hora_inicio_form").value = "";
                      document.getElementById("hora_fin_form").value = "";
                      document.getElementById("numero_permiso_form").value = "";
                      document.getElementById("instructor").value = "";
                      document.getElementById("contenido_form").value = "";
                      message_exito();
                    }else if(r==0){
                      message_error();
                    }else{
                      message_alerta();
                    }
                  }
                });
                }
      }
</script>