<script>
     $(document).ready(function(){
      $('#factor_seguridad').change(function(){
        var a = document.getElementById('caida_libre').value;
        var b = document.getElementById('aceleracion').value;
        var c = document.getElementById('altura_trabajados').value;
        var fs = document.getElementById('factor_seguridad').value;
        document.getElementById("requerimiento_claridad").value = (parseInt(a)+parseInt(b)+parseInt(c)+parseInt(fs));
    });
});


function agregar_informe(){
        if($('#numero_permiso').val()=="" || $('#descripcion_trabajo').val()=="" || 
           $('#ubicacion_trabajo').val()=="" || $('#altura').val()=="" ||
           $('#h_inicio').val()=="" || $('#h_fin').val()=="" ||
           $('#fecha_inicio').val()=="" || $('#fecha_fin').val()=="" || 
           $('#otro_sistema_acceso').val()=="" || $('#epp').val()=="" ||
           $('#epcc').val()=="" || $('#herramientas').val()=="" ||
           $('#integrante1').val()=="" || $('#caida_libre').val()=="" || 
           $('#aceleracion').val()=="" || $('#altura_trabajados').val()=="" ||
           $('#factor_seguridad').val()=="" || $('#requerimiento_claridad').val()=="" ||
           $('#acceso_sitio').val()=="" || $('#recipiente').val()==""/*  || 
           $('#coordinador').val()=="" || $('#rescatista').val()=="" */){
          message_campos();
          }else{
          cadena="form1=" + $('#numero_permiso').val() +
                "&form2=" + $('#descripcion_trabajo').val() +
                "&form3=" + $('#ubicacion_trabajo').val() +
                "&form4=" + $('#altura').val() +
                 "&form5=" + $('#h_inicio').val() +
                 "&form6=" + $('#h_fin').val() +
                 "&form7=" + $('#fecha_inicio').val() +
                 "&form8=" + $('#fecha_fin').val() +
                 "&form66="  + $('input[name="sistema_acceso"]:checked').val()+
                 "&form9=" + $('#otro_sistema_acceso').val() +
                "&form10=" + $('#epp').val() +
                "&form11=" + $('#epcc').val() +
                "&form12=" + $('#herramientas').val() +
                "&form13=" + $('#integrante1').val() +
                "&form67="  + $('input[name="sitio_trabajo"]:checked').val()+
                "&form14=" + $('#caida_libre').val() +
                "&form15=" + $('#aceleracion').val() +
                "&form16=" + $('#altura_trabajados').val() +
                "&form17=" + $('#factor_seguridad').val() +
                "&form18=" + $('#requerimiento_claridad').val() +
                "&form19=" + $('#acceso_sitio').val() +
                "&form20=" + $('#recipiente').val() +
                /* "&form21=" + $('#coordinador').val() +
                "&form22=" + $('#rescatista').val() + */
                "&form23="  + $('input[name="PE-01"]:checked').val()+
                "&form24="  + $('input[name="PE-02"]:checked').val()+
                "&form25="  + $('input[name="PE-03"]:checked').val()+
                "&form26="  + $('input[name="PE-04"]:checked').val()+
                "&form27="  + $('input[name="PE-05"]:checked').val()+
                "&form28="  + $('input[name="PE-06"]:checked').val()+
                "&form29="  + $('input[name="PE-07"]:checked').val()+
                "&form30="  + $('input[name="PE-08"]:checked').val()+
                "&form31="  + $('input[name="PE-09"]:checked').val()+
                "&form32="  + $('input[name="PE-10"]:checked').val()+
                "&form33="  + $('input[name="PE-11"]:checked').val()+
                "&form34="  + $('input[name="PE-12"]:checked').val()+
                "&form35="  + $('input[name="PE-13"]:checked').val()+
                "&form36="  + $('input[name="PE-14"]:checked').val()+
                "&form37="  + $('input[name="PE-15"]:checked').val()+
                "&form38="  + $('input[name="PE-16"]:checked').val()+
                "&form39="  + $('input[name="PE-17"]:checked').val()+
                "&form40="  + $('input[name="PE-18"]:checked').val()+
                "&form41="  + $('input[name="PE-19"]:checked').val()+
                "&form42="  + $('input[name="PE-20"]:checked').val()+
                "&form43="  + $('input[name="PE-21"]:checked').val()+
                "&form44="  + $('input[name="PE-22"]:checked').val()+
                "&form45="  + $('input[name="PE-23"]:checked').val()+
                "&form46="  + $('input[name="PE-24"]:checked').val()+
                "&form47="  + $('input[name="PE-25"]:checked').val()+
                "&form48="  + $('input[name="PE-26"]:checked').val()+
                "&form49="  + $('input[name="PE-27"]:checked').val()+
                "&form50="  + $('input[name="PE-28"]:checked').val()+
                "&form51="  + $('input[name="PE-29"]:checked').val()+
                "&form52="  + $('input[name="PE-30"]:checked').val()+
                "&form53="  + $('input[name="PE-31"]:checked').val()+
                "&form54="  + $('input[name="PE-32"]:checked').val()+
                "&form55="  + $('input[name="PE-33"]:checked').val()+
                "&form56="  + $('input[name="PE-34"]:checked').val()+
                "&form57="  + $('input[name="PE-35"]:checked').val()+
                "&form58="  + $('input[name="PE-36"]:checked').val()+
                "&form59="  + $('input[name="PE-37"]:checked').val()+
                "&form60="  + $('input[name="PE-38"]:checked').val()+
                "&form61="  + $('input[name="PE-39"]:checked').val()+
                "&form62="  + $('input[name="PE-40"]:checked').val()+
                "&form63="  + $('input[name="PE-41"]:checked').val()+
                "&form64="  + $('input[name="PE-42"]:checked').val()+
                "&form65="  + $('input[name="PE-43"]:checked').val()+
                "&form68="  + $('input[name="PE-44"]:checked').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_059/agregar_formato_059.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      message_exito();
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
        alertify.success("Registro exitoso, Recuerda que si quieres agregarte como Rescatista o Coordinador debes ir al menu de agregar y realizar el registro");
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