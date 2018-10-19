<?php 
	require "models/conexio.php";
	require_once "models/CapacitacionClienteModel.php";
	require_once "models/UsuarioModel.php";
	require_once "controllers/CapacitacionClienteController.php";
	require_once "controllers/UsuarioController.php";
	$capacitacion= new CapacitacionControllerCliente();
	$idCliente = $_GET["iniciar"];

 ?>

<div class="container">
	<label style="color:white" class="ocultoImpresion">Buscar en datos de Capacitacion</label>
	<div class="input-group ocultoImpresion">
	<span class="input-group-addon">Buscar</span>
	<input type="text" name="buscar" id="buscar" class="col-xs-12 center-block form-control" placeholder="Buscar por nombre,cliente , cédula o cursos">


</div>
<div id="NoPalabras" class="ocultoImpresion" style="margin-bottom: 2%">
</div>
<div class="container">
	<div class="MostrarTabla">
		
	</div>
</div>
<div class="TablaporDefecto">
	<?php 
	if(isset($_GET["sub"])){
		$id=$_GET["iniciar"];
		$capacitacion-> VerSubContratar($id);
	}

	 ?>
<?php 
		$capacitacion->MostrarCapacitacionCliente($_GET["iniciar"]);

		 ?> </div>