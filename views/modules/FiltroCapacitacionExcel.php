<?php  

header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=capacitacion.xls");
header("Pragma: no-cache");
header("Expires: 0");
require_once "models/CapacitacionClienteModel.php";
	require_once "controllers/CapacitacionClienteController.php";

	if(isset($_POST["clientes"])){
		$capacitacion= new CapacitacionController();
		$capacitacion->ExportarCapacitacionFiltro();
	}