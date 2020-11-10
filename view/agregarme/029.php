<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <?php require_once "../libraries/lib.php";
    require_once "../../model/conexion.php"; 
    $conexion=conexion();
    $id_del_formato_recuperado=$_REQUEST['id_formato'];
    $personal=0;
    
    $sql1="SELECT * FROM sgi_f_029
    JOIN sgi_f_029_preguntas ON sgi_f_029_preguntas.id_029_principal = sgi_f_029.id_029_principal
    WHERE sgi_f_029.id_029_principal = '$id_del_formato_recuperado' AND (sgi_f_029_preguntas.revisado_per_1 is NULL OR sgi_f_029_preguntas.revisado_per_2 is NULL 
       OR sgi_f_029_preguntas.revisado_per_3 is NULL OR sgi_f_029_preguntas.revisado_per_4 is NULL 
       OR sgi_f_029_preguntas.revisado_per_5 is NULL)";
    $ejecutar1=mysqli_query($conexion, $sql1);
    if(mysqli_num_rows($ejecutar1)<=0){$personal=1;}

    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" value="<?php echo $id_del_formato_recuperado; ?>" id="id_formato" hidden>
    <style> .card-img-top{padding: 2rem;}</style>
    <div class="contianer d-flex  justify-content-around mt-5">

        <?php if($personal == '0'){ ?>
        <div class="contenedor" style="width: 50rem;">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img class="card-img-top" src="../media/add/coordinador.png" style="width: 30%;" alt="Card image cap">
                </div>
            </div>
            <div class="card-body" style="padding: 0%;">
                <div class="row">
                    <div class="col-sm-12 border-secondary border bg-info text-center text-white">
                        ARNES
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border border-secondary bg-info d-flex text-center align-items-center justify-content-center"></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                SERIAL ARNES 								
                                <input type="text" class="form-control form-control-sm" id="serial">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                FECHA FABRICACIÓN 								
                                <input type="date" class="form-control form-control-sm" id="fecha_fabricacion">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">01</div>
                            <div class="col-sm-11 border-secondary border">Reatas de hombros							
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-01">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-01" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">02</div>
                            <div class="col-sm-11 border-secondary border">Reatas  de muslos													
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-02">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-02" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">03</div>
                            <div class="col-sm-11 border-secondary border">Reatas Subpélvica														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-03">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-03" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">04</div>
                            <div class="col-sm-11 border-secondary border">Costuras														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-04">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-04" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">05</div>
                            <div class="col-sm-11 border-secondary border">Etiquetas														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-05">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-05" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">06</div>
                            <div class="col-sm-11 border-secondary border">Indicador de impacto														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-06">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-06" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">07</div>
                            <div class="col-sm-11 border-secondary border">Anillo en D, dorsal														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-07">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-07" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">08</div>
                            <div class="col-sm-11 border-secondary border">Anillo en D, pectoral														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-08">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-08" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">09</div>
                            <div class="col-sm-11 border-secondary border">Anillo en D, laterales 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-09">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-09" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">10</div>
                            <div class="col-sm-11 border-secondary border">Anillo en D, ventral 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-10">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-10" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">11</div>
                            <div class="col-sm-11 border-secondary border">Hebillas pasantes														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-11">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-11" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">12</div>
                            <div class="col-sm-11 border-secondary border">Hebillas de ajuste														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-12">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-12" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">13</div>
                            <div class="col-sm-11 border-secondary border">Hebillas de conexión 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-13">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-13" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">14</div>
                            <div class="col-sm-11 border-secondary border">Guía para correa dorsal 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-14">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-14" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">15</div>
                            <div class="col-sm-11 border-secondary border">Guía para correa pectoral											
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-15">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-15" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">16</div>
                            <div class="col-sm-11 border-secondary border">Faja lumbar														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-16">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-16" checked>
                            </div>
                        </div>
                    </div>
                </div>
    
            <div class="segmen3 mt-2">
                <div class="row">
                    <div class="col-sm-12 border border-secondary bg-info text-white text-center">ESLINGAS</div>
                </div>
                <div class="row">
                    <div class=" bg-info col-sm-6 border border-secondary text-white  d-flex text-center align-items-center justify-content-center">
                        ESLINGA Y
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                SERIAL						
                                <input type="text" class="form-control form-control-sm" id="serial_eslinga">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 border border-secondary">
                                FECHA FABRICACIÓN 								
                                <input type="date" class="form-control form-control-sm" id="fecha_fabricacion_eslinga">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">17</div>
                            <div class="col-sm-11 border-secondary border">Ganchos con cierre automático doble seguridad 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-17">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-17" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">18</div>
                            <div class="col-sm-11 border-secondary border">Hebillas de ajuste 														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-18">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-18" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">19</div>
                            <div class="col-sm-11 border-secondary border">Absorbedor de energía														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-19">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-19" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-1 border-secondary border">20</div>
                            <div class="col-sm-11 border-secondary border">Reatas y costuras														
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 border-secondary border">
                        <div class="row">
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">X</label>
                                <input type="radio" class="mr-3 form-check-input" value="X"  name="p-20">
                            </div>
                            <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                <label class="form-check-label">OK</label>
                                <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-20" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="segmen4 mt-2">
                    <div class="row">
                        <div class=" bg-info text-white col-sm-6 border border-secondary  d-flex text-center align-items-center justify-content-center">
                            ESLINGA POSICIONAMIENTO								
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12 border border-secondary">
                                    SERIAL						
                                    <input type="text" class="form-control form-control-sm" id="serial_eslinga_posicionamiento">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 border border-secondary">
                                    FECHA FABRICACIÓN 								
                                    <input type="date" class="form-control form-control-sm" id="fecha_fabricacion_eslinga_posicionamiento">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-1 border-secondary border">21</div>
                                <div class="col-sm-11 border-secondary border">Ganchos con cierre automático doble seguridad 							 														
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">X</label>
                                    <input type="radio" class="mr-3 form-check-input" value="X"  name="p-21">
                                </div>
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">OK</label>
                                    <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-21" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-1 border-secondary border">22</div>
                                <div class="col-sm-11 border-secondary border">Ajustador/hebilla																					
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">X</label>
                                    <input type="radio" class="mr-3 form-check-input" value="X"  name="p-22">
                                </div>
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">OK</label>
                                    <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-22" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-1 border-secondary border">23</div>
                                <div class="col-sm-11 border-secondary border">Reatas y costuras																					
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-secondary border">
                            <div class="row">
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">X</label>
                                    <input type="radio" class="mr-3 form-check-input" value="X"  name="p-23">
                                </div>
                                <div class="col-sm-6 border-secondary border form-check d-flex justify-content-center">
                                    <label class="form-check-label">OK</label>
                                    <input type="radio" class="mr-3 form-check-input" value="OK"  name="p-23" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center my-2">
                            <a onclick="agregarme_como_personal()" class="btn btn-primary">Agregarme</a>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <?php } ?>

        <div class="card text-center border border-primary" style="width: 18rem; max-height: 30rem;">
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
                "&form30=" + $('#serial').val() +
                "&form31=" + $('#fecha_fabricacion').val() +
                "&form32=" + $('#serial_eslinga').val() +
                "&form33=" + $('#fecha_fabricacion_eslinga').val() +
                "&form34=" + $('#serial_eslinga_posicionamiento').val() +
                "&form35=" + $('#fecha_fabricacion_eslinga_posicionamiento').val();
                $.ajax({
                  type:"POST",
                  url:"../../controller/agregarme/029/personal.php", //validacion de datos de registro
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
                  url:"../../controller/agregarme/029/deshabilitar.php", //validacion de datos de registro
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
   function message_campos(){
        alertify.error("Por favor usa todos los campos");
        return false;
      }
</script>