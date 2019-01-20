
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lista de Activo Fijo | SISFIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- notification CSS
		============================================ -->
        <link rel="stylesheet" href="css/notification/notification.css">
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
     <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
<SCRIPT  language=JavaScript> 



function go(){
    //validacion respectiva me da hueva
    document.location.href="IngresarAF.php"; 
} 

function baja(id,accion){
  document.location.href="ListaAF.php?id="+id+"&accion="+accion+"&ide=1";  
     
}

</script> 
<SCRIPT  language=JavaScript> 
function notify(titulo,texto,from, align, icon, type, animIn, animOut){
		$.growl({
			icon: icon,
			title: titulo+" ",
			message: texto,
			url: ''
		},{
				element: 'body',
				type: type,
				allow_dismiss: true,
				placement: {
						from: from,
						align: align
				},
				offset: {
					x: 20,
					y: 85
				},
				spacing: 10,
				z_index: 1031,
				delay: 2500,
				timer: 1000,
				url_target: '_blank',
				mouse_over: false,
				animate: {
						enter: animIn,
						exit: animOut
				},
				icon_type: 'class',
				template: '<div data-growl="container" class="alert" role="alert">' +
								'<button type="button" class="close" data-growl="dismiss">' +
									'<span aria-hidden="true">&times;</span>' +
									'<span class="sr-only">Close</span>' +
								'</button>' +
								'<span data-growl="icon"></span>' +
								'<span data-growl="title"></span>' +
								'<span data-growl="message"></span>' +
								'<a href="#" data-growl="url"></a>' +
							'</div>'
		});
	}
  function modificar(id){
       
       document.location.href="editarAF.php?id="+id;
   }
   function filtrar(){
          id=document.getElementById("op").value;
    
           $("#ide").val(id);
          document.form.submit();
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
            <center>
        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                            <label>Filtrado</label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="op" id="op" onchange="filtrar()">
                                    <option value="Seleccione">Seleccione</option>
                                    <?php
                                    
                                             echo "<option value='1'>Mostrar Lista General de Activo Fijo</option>";
                                             echo "<option value='2'>Mostrar Lista Depreciación de Activo Fijo</option>";
                                             echo "<option value='3'>Mostrar Lista por Encargado</option>";
                                             echo "<option value='4'>Mostrar Lista por Institución</option>";
                                        
                                        ?>
                                    </select>
                                </div>
                                </div>
                                </center>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
                                    </div>
                                    <form id="form" name="form" action="" method="GET">
<div class="input-group " style="padding-bottom:20px;">
  <input id="ide" type="hidden" class="form-control" name="ide" placeholder="En que año estudio el grado anterior">
  </div>
  </form>
									<div class="breadcomb-ctn">
										<h2>Lista de Activo Fijo.</h2>
										<p>Datos <span class="bread-ntd">de Activo Fijo.</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                       
                                    <button class="btn btn-primary notika-btn-primary" onclick="go();">+ Agregar Nuevo</button>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- Breadcomb area End-->
  <!-- Data Table area Start-->
  <div class="data-table-area">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                             </div>
                        <div class="table-responsive">
                        <?php
                        if(isset($_GET['ide'])){
                            $ide=$_GET['ide'];
                            if($ide==1){

                             echo "<table id='data-table-basic' class='table table-striped'>
                                <thead>
                                    <tr>
                                        
                                        <th>Descripción</th>
                                        <th>Correlativo</th>
                                        <th>Fecha adquicición</th>
                                        <th>Calsificación</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>";
                      
include "config/conexion.php";
$result = $conexion->query("SELECT
tactivo.descripcion,
tactivo.correlativo,
tactivo.fecha_adquisicion,
tactivo.id_activo,
tactivo.estado,
tclasificacion.nombre as clasificacion
FROM
tactivo
INNER JOIN ttipo_activo ON tactivo.id_tipo = ttipo_activo.id_tipo
INNER JOIN tclasificacion ON ttipo_activo.id_clasificacion = tclasificacion.id_clasificaion");
if ($result) {
    while ($fila = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $fila->descripcion . "</td>";
        echo "<td>" . $fila->correlativo . "</td>";
        echo "<td>" . $fila->fecha_adquisicion . "</td>";
        echo "<td>" . $fila->clasificacion . "</td>";
        if($fila->estado==1){
            echo "<td>Activo</td>";
        }else{
            echo "<td>Inactivo</td>";
        }
       
        echo "<td>
        <div class='button-icon-btn'>
        <button class='btn btn-lightgreen lightgreen-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Modificar activo.'  onclick='modificar(" . $fila->id_activo. ")'><i class='notika-icon notika-menus'></i></button>
        ";
        
        echo  "<button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Ver Activo Fijo.' onclick='modify(" . $fila->id_activo. ")'><i class='notika-icon notika-eye'></i></button>";
       
        if($fila->estado==1){
            echo  "<button class='btn btn-danger info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Hacer una devolucion sobre compra.' onclick='baja(" . $fila->id_activo. ",1)'><i class='notika-icon notika-down-arrow'></i></button>";
         }else{
        
            echo  "<button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Hacer una compra.' onclick='baja(" . $fila->id_activo. ", 2)'><i class='notika-icon notika-up-arrow'></i></button>";
        }
       echo
        "</div>
        </td>";
        echo "</tr>";

    }
}

                     echo "</tbody>
                            </table>";
                        }else if($ide==2){

                            echo "<table id='data-table-basic' class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Correlativo</th>
                                    <th>Fecha adquicición</th>
                                    <th>Institución</th>
                                    <th>Departamento</th>
                                    <th>Valor</th>
                                    <th>Deprec. Acum</th>
                                    <th>T. Depreciación</th>
                                 
                                    <th>Ver Depreciación</th>
                                </tr>
                            </thead>
                            <tbody>";
                  
include "config/conexion.php";
$result = $conexion->query("SELECT
tactivo.id_activo,
tactivo.correlativo,
tactivo.fecha_adquisicion,
tdepartamento.nombre as dpto,
tinstitucion.nombre as insti,
tactivo.precio,
tactivo.depreciacionacum,
tclasificacion.tiempo_depreciacion
FROM
tactivo
INNER JOIN tdepartamento ON tactivo.id_departamento = tdepartamento.id_departamento
INNER JOIN tinstitucion ON tdepartamento.id_institucion = tinstitucion.id_institucion
INNER JOIN ttipo_activo ON tactivo.id_tipo = ttipo_activo.id_tipo
INNER JOIN tclasificacion ON ttipo_activo.id_clasificacion = tclasificacion.id_clasificaion");
if ($result) {
while ($fila = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $fila->correlativo . "</td>";
    echo "<td>" . $fila->fecha_adquisicion . "</td>";
    echo "<td>" . $fila->insti . "</td>";
    echo "<td>" . $fila->dpto . "</td>";
    echo "<td>" . $fila->precio . "</td>"; 
    echo "<td>" . $fila->depreciacionacum . "</td>";
    echo "<td>" . $fila->tiempo_depreciacion . "</td>";

    echo "<td>
    <div class='button-icon-btn'>";
    echo  "<button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Ver Depreciación.' onclick='modify(" . $fila->id_activo. ")'><i class='notika-icon notika-eye'></i></button>";
   echo "</div>
    </td>";
    echo "</tr>";

}
}

                 echo "</tbody>
                        </table>";


                        }else if($ide==3){

                            echo "<table id='data-table-basic' class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Correlativo</th>
                                    <th>Institución</th>
                                    <th>Departamento</th>
                                    <th>Tipo Activo</th>
                                    <th>Encargado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>";
                  
include "config/conexion.php";
$result = $conexion->query("SELECT
tactivo.id_activo,
tactivo.correlativo,
tdepartamento.nombre as dpto,
tinstitucion.nombre as insti,
templeados.nombre as emp,
templeados.apellido,
ttipo_activo.nombre as tipo
FROM
tactivo
INNER JOIN tdepartamento ON tactivo.id_departamento = tdepartamento.id_departamento
INNER JOIN tinstitucion ON tdepartamento.id_institucion = tinstitucion.id_institucion
INNER JOIN templeados ON tactivo.id_encargado = templeados.id_empleado
INNER JOIN ttipo_activo ON tactivo.id_tipo = ttipo_activo.id_tipo");
if ($result) {
while ($fila = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $fila->correlativo . "</td>";
    echo "<td>" . $fila->insti. "</td>";
    echo "<td>" . $fila->dpto . "</td>";
    echo "<td>" . $fila->tipo . "</td>";
    echo "<td>" . $fila->emp . " ".$fila->apellido."</td>"; 

    echo "<td>
    <div class='button-icon-btn'>";
    echo  "<button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Ver Depreciación.' onclick='modify(" . $fila->id_activo. ")'><i class='notika-icon notika-eye'></i></button>";
   
   echo "</div>
    </td>";
    echo "</tr>";

}
}

                 echo "</tbody>
                        </table>";


                        }else if($ide==4){

                            echo "<table id='data-table-basic' class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Correlativo</th>
                                    <th>Tipo</th>
                                    <th>Institución</th>
                                    <th>Departamento</th>
                                    <th>Proveedor</th>
                                    <th>Marca</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>";
                  
include "config/conexion.php";
$result = $conexion->query("SELECT
tproveedor.nombre,
tinstitucion.nombre as insti,
tdepartamento.nombre as dpto,
tactivo.correlativo,
tactivo.id_activo,
tactivo.marca,
ttipo_activo.nombre as tipo
FROM
tactivo
INNER JOIN tdepartamento ON tactivo.id_departamento = tdepartamento.id_departamento
INNER JOIN tinstitucion ON tdepartamento.id_institucion = tinstitucion.id_institucion
INNER JOIN tproveedor ON tactivo.id_proveedor = tproveedor.id_proveedor
INNER JOIN ttipo_activo ON tactivo.id_tipo = ttipo_activo.id_tipo");
if ($result) {
while ($fila = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $fila->correlativo . "</td>";
    echo "<td>" . $fila->tipo . "</td>"; 
    echo "<td>" . $fila->insti. "</td>";
    echo "<td>" . $fila->dpto . "</td>";
    echo "<td>" . $fila->nombre . "</td>";
    echo "<td>" . $fila->marca . "</td>"; 
 

    echo "<td>
    <div class='button-icon-btn'>";
    echo  "<button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-toggle='tooltip' data-placement='bottom' title='Ver Depreciación.' onclick='modify(" . $fila->id_activo. ")'><i class='notika-icon notika-eye'></i></button>";
   
   echo "</div>
    </td>";
    echo "</tr>";

}
}

                 echo "</tbody>
                        </table>";


                        }
}else{
 echo   "<div class='breadcomb-ctn'>
  <center>
    <p> <span class='bread-ntd'>Por favor elija un filtro..</span></p></center>
</div>";
}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

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
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
     <!--  notification JS
		============================================ -->
        <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
     <!-- bootstrap select JS
		============================================ -->
        <script src="js/bootstrap-select/bootstrap-select.js"></script>
</body>

</html>
<?php
include "config/conexion.php";
$accion = $_REQUEST['bandera'];
if($accion==1){
      msgI("Se modificaron los datos con exito");
  } else if($accion==2) {
      msgE("cocurrio un error en el registro de los archivos");
  }else if($accion==3) {
    msgA("Los datos que se ingresaron ya existen");
}  

$bandera=  $_REQUEST['accion'];
$bandera2=  $_REQUEST['id'];
if($bandera=1){
    $consulta="UPDATE tactivo set estado= '0' WHERE id_activo='".$bandera2."'";
    $resultado=$conexion->query($consulta);
    if($resultado){
        msgI("Exito");
    }else{
        msgE("Error");
    }

}


function msgI($texto)
{
    echo "<script type='text/javascript'>";
    echo "notify('Exito','$texto','top', 'right', 'any', 'success');";
    echo "</script>";
}
function msgA($texto)
{
    echo "<script type='text/javascript'>";
    echo "notify('Advertencia','$texto','top', 'right', 'any', 'warning');";
    echo "</script>";
}
function msgE($texto)
{
    echo "<script type='text/javascript'>";
    echo "notify('Error','$texto','top', 'right', 'any', 'danger');";
    echo "</script>";
}
?>