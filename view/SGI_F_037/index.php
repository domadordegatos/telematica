<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once "../menus/index.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../libraries/lib.php";
          require_once "../../model/conexion.php"; 
          require_once "../../model/sgi_f_037.php";
          $conexion=conexion();

          $user = $_SESSION['user'];

            $sql="SELECT login_users.id_user FROM login_users WHERE login_users.usuario = '$user'";
            $result=mysqli_query($conexion,$sql); $ver=mysqli_fetch_row($result);
            $sql1="SELECT usuarios.id_user FROM login_users JOIN usuarios ON usuarios.credenciales = login_users.id_user WHERE login_users.id_user = '$ver[0]'";
            $result1=mysqli_query($conexion,$sql1); $ver1=mysqli_fetch_row($result1);
    ?>
</head>
<body>
    <div class="container">
        <div class="segment1 mt-3">
        <div class="row border border-secondary">
            <div class="col-4 border border-secondary">
              <img src="../media/photos/t_white.PNG" alt="png_telematica" width="200px">
            </div>
            <div class="col-4 border border-secondary d-flex align-items-center">
              <p class="text-center">INSPECCIÓN DE HERRAMIENTA CAMPO</p>
            </div>
            <div class="col-4 border border-secondary d-flex flex-column" style="padding: 0%;">
              <row class="border border-secondary">Código: SGI F 037</row>
              <row class="border border-secondary">Revisado: Mayo 2020</row>
              <row class="border border-secondary">Versión: 02</row>
            </div>
          </div>
        </div>


        <div class="segment2 mt-3">

            <div class="row">
                <div class="col-sm-12 text-center bg-info text-white">
                    DATOS GENERALES
                </div>
            </div>
            <div class="row border border-secondary">
                <div class="col-sm-4 my-none">
                    <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">FECHA</label>
                    <div class="col-10">
                        <input class="form-control form-control-sm" type="date" value="" id="fecha">
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-none">
                        <div class="form-group row m-0">
                        <label for="example-date-input" class="py-0 col-4 col-form-label">LUGAR:</label>
                        <div class="col-8">
                            <input class="form-control form-control-sm" type="text" value="" id="lugar">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-none">
                    <div class="form-group row m-0">
                    <label for="example-date-input" class="py-0 col-4 col-form-label">No:</label>
                    <div class="col-8">
                        <input class="form-control form-control-sm" type="text" value="" id="numero">
                    </div>
                </div>
            </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center bg-info text-white">
                    ITEM
                </div>
                <div class="col-sm-6 text-center bg-info text-white">
                    HERRAMIENTA
                </div>
                <div class="col-sm-2 text-center bg-info text-white">
                    CANTIDAD
                </div>
                <div class="col-sm-3 text-center bg-info text-white">
                    (B) ESTADO (M)
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">01</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-01"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-01"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-01" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-01" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">02</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-02"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-02"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-02" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-02" value="M"> </div>
                    </div>
                </div>
            </div>
            
            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">03</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-03"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-03"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-03" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-03" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">04</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-04"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-04"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-04" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-04" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">05</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-05"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-05"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-05" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-05" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">06</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-06"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-06"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-06" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-06" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">07</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-07"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-07"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-07" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-07" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">08</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-08"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-08"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-08" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-08" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">09</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-09"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-09"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-09" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-09" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">10</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-10"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-10"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-10" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-10" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">11</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-11"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-11"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-11" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-11" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">12</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-12"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-12"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-12" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-12" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">13</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-13"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-13"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-13" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-13" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">14</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-14"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-14"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-14" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-14" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">15</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-15"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-15"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-15" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-15" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">16</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-16"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-16"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-16" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-16" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">17</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-17"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-17"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-17" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-17" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">18</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-18"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-18"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-18" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-18" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">19</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-19"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-19"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-19" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-19" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">20</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-20"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-20"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-20" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-20" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">21</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-21"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-21"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-21" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-21" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">22</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-22"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-22"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-22" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-22" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">23</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-23"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-23"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-23" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-23" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">24</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-24"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-24"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-24" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-24" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">25</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-25"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-25"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-25" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-25" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">26</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-26"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-26"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-26" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-26" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">27</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-27"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-27"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-27" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-27" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">28</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-28"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-28"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-28" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-28" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">29</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-29"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-29"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-29" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-29" value="M"> </div>
                    </div>
                </div>
            </div>

            <div class="row border border-secondary">
                <div class="col-sm-1 text-center">30</div>
                <div class="col-sm-6"><input class="form-control form-control-sm" type="text" id="it-30"></div>
                <div class="col-sm-2"><input class="form-control form-control-sm" type="number" id="ic-30"></div>
                <div class="col-sm-3">
                    <div class="row border border-secondary" style="height: 31px;">
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-30" value="B" checked> </div>
                        <div class="col-sm-6 border border-secondary d-flex align-items-center justify-content-center"> <input type="radio" name="ie-30" value="M"> </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="segment3 mb-5">
            <div class="row border border-secondary">
                <div class="form-group col-12">
                  <label for="contenido">OBSERVACIONES:</label>
                    <textarea class="form-control" id="observaciones" rows="2"></textarea>
                </div>
            </div>
            <div class="row border border-secondary">
                <div class="col-sm-3 border border-secondary text-center bg-info">PARTE DE LA HERRAMIENTA</div>
                <div class="col-sm-9 border border-secondary text-center bg-info">CRITERIOS DE VERIFICICACIÓN</div>
            </div>
            <div class="row border border-secondary">
                <div class="col-sm-3 border border-secondary">Sujetadores o mangos de angarre</div>
                <div class="col-sm-9 border border-secondary">Verifique que se encuentren en buen estado, si son de madera que no presenten fisura o astillamiento
                    deben estar perfectamente acoplados y solidamente fijados a la herramienta, si son en pasta o plasticos deben ser 
                    antideslizante. Libres de suciedad o residuos de aceite.
                </div>
            </div>
            <div class="row border border-secondary">
                <div class="col-sm-3 border border-secondary">Puntas o cabezas metalicas</div>
                <div class="col-sm-9 border border-secondary">Caras planas, que no presenten oxido, rebabas o limaduras, si se presentan tornillos o amortiguadores de
                    articulacion, este debe ser lubricado o engrasado periodicamente, libres de suciedad o residuos de aceite.
                </div>
            </div>
            <div class="row border border-secondary">
                <div class="col-sm-3 border border-secondary">Herramienta manual para trabajo con electricidad</div>
                <div class="col-sm-9 border border-secondary">Deben tener aislamientos / coberturas libre de fallas o cortaduras, estos deben cumplir con la norma
                    IEC 60900 y ASTM 1505-97
                </div>
            </div>
            <div class="row bg-info text-center">
                <div class="col-sm-12">
                    REVISADO POR:
                </div>
<!--                 <div class="col-sm-3">
                    CARGO:
                </div> -->
                <!-- <div class="col-sm-8">
                    FIRMA:
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-12 border-secondary border">
                    <select class="form-control form-control-sm" id="revisado" name="revisado">
                        <option value="A">Revisado...</option>
                        <?php $sql="SELECT id_user, lastnames, NAMES FROM usuarios WHERE usuarios.id_user = '$ver1[0]' order by lastnames asc";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($ver=mysqli_fetch_row($result)):?>
                            <option value=<?php echo $ver[0]; ?>><?php echo $ver[1]." ".$ver[2]; ?></option>
                          <?php endwhile; ?>
                      </select>
                </div>
<!--                 <div class="col-sm-8 border-secondary border">

                </div> -->
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 d-flex flex-row-reverse">
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
                        </svg>Regresar
                      </button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>