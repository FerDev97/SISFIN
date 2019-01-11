<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ingreso de Activo Fijo| SISFIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- datapicker CSS
		============================================ -->
        <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- bootstrap select CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<script  language=JavaScript> 
function go(){
    //validacion respectiva me da hueva
    
    document.form.submit(); 
}
function tabla(){
    document.location.href="listaAF.php"; 
}
 

   


</script> 

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
      <!-- Start Header Top Area -->
    <?php include "header.php"; ?>
        <!-- End Header Top Area -->

    <!-- Mobile Menu start -->
    <?php include "menumobil.php"; ?>
    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->
    <?php include "menuprincipal.php"; ?>
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Registro de Activo Fijo.</h2>
										<p>Formulario de Activo Fijo <span class="bread-ntd">.</span></p>
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Datos del Activo Fijo</h2>
                            
                        </div>
                        <form id="form"name="form" method="post" action="">
                        <input type="hidden" name="bandera" id="bandera" value="1">
                       

                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Tipo Activo (falta)</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Departamento</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Proveedor</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-t-20">
                            <label>Usuario</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-t-20">
                            <label>Encargado</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-t-20">
                            <label>Estado</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="institucion" id="institucion">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                     include 'config/conexion.php';
                                     $result = $conexion->query("select id_institucion as id,nombre FROM tinstitucion");
                                     if ($result) {
                                         while ($fila = $result->fetch_object()) {
                                             echo "<option value='".$fila->id."'>".$fila->nombre."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-t-20">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Estado:</label>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Ingrese  un correlativo para departamento." id="correlativo" name="correlativo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               <div class="">
                            </div>
                            </div>
                            </div>
                               
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-t-15">
                                <div class="form-group nk-datapk-ctm" id="data_2">
                                    <label>Fecha de Adquicición:</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" data-mask="99/99/9999" value="today">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mg-t-20">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Correlativo:</label>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Correlativo" id="correlativo" name="correlativo" readonly>
                                        
                                    </div>
                                        
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 mg-t-20">
									<button type="button" data-toggle="modal" title="Generar Correlativo" data-target="#myModaloneCat" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg waves-effect"><i class="notika-icon notika-house"></i></button>
                                    </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-t-20">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Descripción:</label>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Ingrese  un correlativo para departamento." id="correlativo" name="correlativo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               <div class="">
                            </div>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-t-20">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Observaciones:</label>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Ingrese  un correlativo para departamento." id="correlativo" name="correlativo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               <div class="">
                            </div>
                            </div>
                            </div>
                           <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" style="margin-left: 500px;" onclick="go();" >Guardar.</button>
                            <button type="button" class="btn btn-success notika-btn-success" onclick="tabla();">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
    </div>
    <!-- Form Examples area End-->
    <!-- Start Footer area-->
    <?php include "footer.php";?>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
        <!-- Input Mask JS
		============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
     <!-- bootstrap select JS
		============================================ -->
        <script src="js/bootstrap-select/bootstrap-select.js"></script>

    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
       <!-- datapicker JS
		============================================ -->
        <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
</body>

</html>
<?php
include "config/conexion.php";
$bandera  = $_REQUEST["bandera"];
$departamento     = $_REQUEST["departamento"];
$institucion      = $_REQUEST["institucion"];
$correlativo     = $_REQUEST["correlativo"];
if($bandera==1){

$query = "SELECT nombre FROM tdepartamento WHERE nombre like '%".$departamento."';";
$result = $conexion->query($query);
if($result->num_rows == 0){   
$consulta  = "INSERT INTO tdepartamento VALUES('null','" .$institucion. "','" .$departamento. "','" .$correlativo. "')";
    $resultado = $conexion->query($consulta);
      if($resultado){
          msg("Se agregaron los datos correctamente");
      } else {
          msg("Error al insertar los datos");
      }
}else{
  msg("Esta Departamento ya existe");
}
}

  
function msg($texto)
{
    echo "<script type='text/javascript'>";
    echo "alert('$texto');";
    echo "document.location.href='ingresarDepartamento.php';";
    echo "</script>";
}
?>