<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI_F_030</title>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/sgi_f_030.php";

          $conexion=conexion();
          $user = $_SESSION['user'];

          $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
          $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
          $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
          $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);

          date_default_timezone_set('America/Bogota');
            $fecha= date('Y-m-d'); 
            $time = time(); 
            $hora = date("H:i:s",$time);
          ?>
</head>
<body>
    <div class="container">
        <div class="segment1 mt-3">
            <div class="row">
                <div class="col-4 border">
                  <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
                </div>
                <div class="col-4 border d-flex text-center align-items-center">
                  <p>LISTA DE CHEQUEO PARA INSPECCION KIT DE RESCATE</p>
                </div>
                <div class="col-4 border d-flex flex-column" style="padding: 0%;">
                  <row class="border">Código: SGI F 030</row>
                  <row class="border">Revisado: Mayo 2020</row>
                  <row class="border">Versión: 02</row>
                </div>
              </div>
        </div>

        <div class="segment2 mt-3">
            <div class="row">
              <div class="col-sm-4 border border-secondary">ACTIVIDAD:</div>
              <div class="col-sm-8 border border-secondary">

                <div class="form-group row m-0">
                  <div class="col-6">
                    <input class="form-control form-control-sm" type="text" value="" id="actividad">
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 border border-secondary">
                <div class="form-group row m-0">
                  <label for="example-date-input" class="py-0 col-3 col-form-label">FECHA</label>
                  <div class="col-9">
                    <input class="form-control form-control-sm" type="date" id="fecha" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>"> 
                  </div>
                </div>
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="form-group row m-0">
                  <label for="example-date-input" class="py-0 col- col-form-label">INSPECCIONADO POR:</label>
                  <div class="col-6">
                    <select class="form-control form-control-sm" id="inspector" name="inspector">
                      <option value="A">Lider...</option>
                      <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-4 border border-secondary">FIRMA:</div> -->
            </div>

        <!-- <div class="row">
          <div class="col-sm-12 border border-secondary">
            <strong>NOTA:</strong> En los dias que no se diligencia el formato, se debe cerrar la columna.
          </div>
        </div> -->

        <div class="row">
          <div class="col-sm-6 border border-secondary text-center" style="background:rgb(189, 187, 187);">
            <strong>ESTADO DEL EQUIPO</strong> Verificar costuras y tejidos trenzados, elementos metalicos libres de oxidación, rotos o deformados)
          </div>
          <div class="col-sm-6 border border-secondary text-center">
            <div class="row"  style="background:rgb(189, 187, 187);">
              <div class="col-sm-12">
                DIA 1
              </div>
            </div>
            <div class="row">
                <div class="col-sm-6 border border-secondary bg-info">B</div>
                <div class="col-sm-6 border border-secondary"  style="background:rgb(189, 187, 187);">M</div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                TIE OFF
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_serie_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_marca_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_serie_2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_marca_2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_serie_3">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="TIE_marca_3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row" style="height: 66px;">
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie1" value="M"> </div>
            </div>
            <div class="row" style="height: 67px;">
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie2" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie2" value="M"> </div>
            </div>
            <div class="row" style="height: 66px;">
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie3" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="tie3" value="M"> </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                POLEAS DOBLES
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Capacidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="polea_dobles_capacidad_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Capacidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="polea_dobles_capacidad_2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Capacidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="polea_dobles_capacidad_3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row" style="height: 33px;">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_1" value="M"> </div>
            </div>
            <div class="row" style="height: 33px;">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_2" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_2" value="M"> </div>
            </div>
            <div class="row" style="height: 34px;">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_3" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_doble_3" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                POLEA SENCILLA
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Capacidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="polea_sencilla_capacidad_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Capacidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="polea_sencilla_capacidad_2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_sencilla_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_sencilla_1" value="M"> </div>
            </div>
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_sencilla_2" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="polea_sencilla_2" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                DESCENDEDOR 
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="descendedor_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="descendedor_2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="descendedor_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="descendedor_1" value="M"> </div>
            </div>
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="descendedor_2" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="descendedor_2" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                BLOQUEADOR (GIBB)
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="bloqueador_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="bloqueador_2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-100">
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="bloqueador_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="bloqueador_1" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                MOSQUETONES
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Cantidad:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="mosquetones">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-100">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="mosquetones_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="mosquetones_1" value="M"> </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                ARRESTADOR
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_serie_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_marca_1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_serie_2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_marca_2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Serie:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_serie_3">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Marca:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="arrestador_marca_3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-sm-6 border-secondary border text-center">
              <div class="row" style="height: 66px;">
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_1" value="B" checked> </div>
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_1" value="M"> </div>
              </div>
              <div class="row" style="height: 67px;">
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_2" value="B" checked> </div>
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_2" value="M"> </div>
              </div>
              <div class="row" style="height: 66px;">
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_3" value="B" checked> </div>
                <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="arrestador_3" value="M"> </div>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                CUERDA ESTATICA
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Metros:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="cuerda_estatica">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-100">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="cuerda_estatica" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="cuerda_estatica" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                CUERDA AUUXILIAR
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary">
                    <div class="form-group row m-0">
                      <label for="example-date-input" class="py-0 col-4 col-form-label">Metros:</label>
                      <div class="col-8">
                        <input class="form-control form-control-sm" type="number" value="" id="cuerda_auxiliar">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-100">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="cuerda_auxiliar" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="cuerda_auxiliar" value="M"> </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6 border border-secondary">
            <div class="row">
              <div class="col-sm-6 border border-secondary d-flex justify-content-center align-items-center">
                ACCESORIOS ADICIONALES
              </div>
              <div class="col-sm-6 border border-secondary">
                <div class="row">
                  <div class="col-sm-12 border border-secondary"> <input type="text" class="form-control form-control-sm" id="adicional_1"> </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 border border-secondary"> <input type="text" class="form-control form-control-sm" id="adicional_2"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 border-secondary border text-center">
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="adicional_1" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="adicional_1" value="M"> </div>
            </div>
            <div class="row h-50">
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="adicional_2" value="B" checked> </div>
              <div class="col-sm-6 border border-secondary"> <input type="radio" name="adicional_2" value="M"> </div>
            </div>
          </div>
        </div>


        </div>

        <div class="segment3 my-3">

          <div class="row">
            <div class="col-sm-12 border border-secondary">
              <div class="row">
                <div class="col-sm-12">
                  CIERRE DE LOS HALLAZGOS ENCONTRADOS
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cierre" value="Y" checked>
                    <label class="form-check-label" for="inlineRadio1">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cierre" value="N">
                    <label class="form-check-label" for="inlineRadio2">NO</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cierre" value="N/A">
                    <label class="form-check-label" for="inlineRadio3">N/A</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 border border-secondary">
              <div class="form-group row m-0">
                <label for="example-date-input" class="py-0 col-4 col-form-label">FECHA DE CIERRE</label>
                <div class="col-8">
                  <input class="form-control form-control-sm" type="date" min="<?php echo $fecha; ?>" value="<?php echo $fecha; ?>" id="fecha_cierre">
                </div>
              </div>
            </div>
          </div>

        </div>
      
        <div class="row mb-3 d-flex flex-row-reverse">
          <button type="button" class="btn btn-sm btn-primary" onclick="agregar_informe()">Agregar Informe
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg>
          </button>

          <button class="btn btn-info btn-sm mr-1" onclick="javascript:history.back(1)">
            <svg class="mr-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
              <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
              <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
            </svg>Regresar</button>
          
        </div>

    </div>
    
</body>
</html>