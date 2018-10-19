<?php 
header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=capacitacion.xls");
header("Pragma: no-cache");
header("Expires: 0");
require_once "models/CapacitacionClienteModel.php";
	require_once "controllers/CapacitacionClienteController.php";

$capacitacion= new CapacitacionController();
$capacitacionM = new CapacitacionControllerCliente();
if(!isset($_GET["palabra"]) && !isset($_GET["cliente"]) ){
$capacitacion->ExportarCapacitacion();

}elseif(isset($_GET["cliente"]) && !isset($_GET["palabra"])){
	$datos = $_GET["cliente"];
	$capacitacionM->ExportarCapacitacionCliente($datos);
}
elseif(isset($_GET["palabra"]) && !isset($_GET["cliente"])){
	$palabra=$_GET["palabra"];
	$capacitacion->ExportarCapacitacionPalabra($palabra);
}elseif(isset($_GET["palabra"])  && isset($_GET["cliente"])){
	$palabra=$_GET["palabra"];
	$cliente=$_GET["cliente"];
	$capacitacionM->ExportarCapacitacionPalabraCliente($palabra,$cliente);
}