<script>
    function agregar_informe(){
        if($('#lugar').val()=="" || $('#fecha').val()=="" || 
           $('#observaciones').val()=="" || $('#revisado').val()=="" ||
           $('#it-01').val()=="" || $('#ic-01').val()=="" || $('#numero').val()==""){
          message_campos();
          }else{
          cadena="form1=" + $('#fecha').val() +
                "&form2=" + $('#lugar').val() +
                "&form3=" + $('#observaciones').val() +
                "&form4=" + $('#revisado').val() +
                 "&form5=" + $('#it-01').val() +
                 "&form6=" + $('#it-02').val() +
                 "&form7=" + $('#it-03').val() +
                 "&form8=" + $('#it-04').val() +
                 "&form9=" + $('#it-05').val() +
                "&form10=" + $('#it-06').val() +
                "&form11=" + $('#it-07').val() +
                "&form12=" + $('#it-08').val() +
                "&form13=" + $('#it-09').val() +
                "&form14=" + $('#it-10').val() +
                "&form15=" + $('#it-11').val() +
                "&form16=" + $('#it-12').val() +
                "&form17=" + $('#it-13').val() +
                "&form18=" + $('#it-14').val() +
                "&form19=" + $('#it-15').val() +
                "&form20=" + $('#it-16').val() +
                "&form21=" + $('#it-17').val() +
                "&form22=" + $('#it-18').val() +
                "&form23=" + $('#it-19').val() +
                "&form24=" + $('#it-20').val() +
                "&form25=" + $('#it-21').val() +
                "&form26=" + $('#it-22').val() +
                "&form27=" + $('#it-23').val() +
                "&form28=" + $('#it-24').val() +
                "&form29=" + $('#it-25').val() +
                "&form30=" + $('#it-26').val() +
                "&form31=" + $('#it-27').val() +
                "&form32=" + $('#it-28').val() +
                "&form33=" + $('#it-29').val() +
                "&form34=" + $('#it-30').val() +
                "&form35=" + $('#ic-01').val() +
                "&form36=" + $('#ic-02').val() +
                "&form37=" + $('#ic-03').val() +
                "&form38=" + $('#ic-04').val() +
                "&form39=" + $('#ic-05').val() +
                "&form40=" + $('#ic-06').val() +
                "&form41=" + $('#ic-07').val() +
                "&form42=" + $('#ic-08').val() +
                "&form43=" + $('#ic-09').val() +
                "&form44=" + $('#ic-10').val() +
                "&form45=" + $('#ic-11').val() +
                "&form46=" + $('#ic-12').val() +
                "&form47=" + $('#ic-13').val() +
                "&form48=" + $('#ic-14').val() +
                "&form49=" + $('#ic-15').val() +
                "&form51=" + $('#ic-16').val() +
                "&form52=" + $('#ic-17').val() +
                "&form53=" + $('#ic-18').val() +
                "&form54=" + $('#ic-19').val() +
                "&form55=" + $('#ic-20').val() +
                "&form56=" + $('#ic-21').val() +
                "&form57=" + $('#ic-22').val() +
                "&form58=" + $('#ic-23').val() +
                "&form59=" + $('#ic-24').val() +
                "&form60=" + $('#ic-25').val() +
                "&form61=" + $('#ic-26').val() +
                "&form62=" + $('#ic-27').val() +
                "&form63=" + $('#ic-28').val() +
                "&form64=" + $('#ic-29').val() +
                "&form65=" + $('#ic-30').val() +
                "&form66="  + $('input[name="ie-01"]:checked').val()+
                "&form67="  + $('input[name="ie-02"]:checked').val()+
                "&form68="  + $('input[name="ie-03"]:checked').val()+
                "&form69="  + $('input[name="ie-04"]:checked').val()+
                "&form70="  + $('input[name="ie-05"]:checked').val()+
                "&form71="  + $('input[name="ie-06"]:checked').val()+
                "&form72="  + $('input[name="ie-07"]:checked').val()+
                "&form73="  + $('input[name="ie-08"]:checked').val()+
                "&form74="  + $('input[name="ie-09"]:checked').val()+
                "&form75="  + $('input[name="ie-10"]:checked').val()+
                "&form76="  + $('input[name="ie-11"]:checked').val()+
                "&form77="  + $('input[name="ie-12"]:checked').val()+
                "&form79="  + $('input[name="ie-13"]:checked').val()+
                "&form80="  + $('input[name="ie-14"]:checked').val()+
                "&form81="  + $('input[name="ie-15"]:checked').val()+
                "&form82="  + $('input[name="ie-16"]:checked').val()+
                "&form83="  + $('input[name="ie-17"]:checked').val()+
                "&form84="  + $('input[name="ie-18"]:checked').val()+
                "&form85="  + $('input[name="ie-19"]:checked').val()+
                "&form86="  + $('input[name="ie-20"]:checked').val()+
                "&form87="  + $('input[name="ie-21"]:checked').val()+
                "&form88="  + $('input[name="ie-22"]:checked').val()+
                "&form89="  + $('input[name="ie-23"]:checked').val()+
                "&form90="  + $('input[name="ie-24"]:checked').val()+
                "&form91="  + $('input[name="ie-25"]:checked').val()+
                "&form92="  + $('input[name="ie-26"]:checked').val()+
                "&form93="  + $('input[name="ie-27"]:checked').val()+
                "&form94="  + $('input[name="ie-28"]:checked').val()+
                "&form95="  + $('input[name="ie-29"]:checked').val()+
                "&form96="  + $('input[name="ie-30"]:checked').val()+
                "&form97=" + $('#numero').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/sgi_f_037/agregar_formato_037.php", //validacion de datos de registro
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      message_exito();
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