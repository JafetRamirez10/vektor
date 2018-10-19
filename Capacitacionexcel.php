<?php  
require_once "models/conexio.php";
require_once "models/CapacitacionModel.php";
require_once "controllers/CapacitacionController.php";
session_start();

if(!$_SESSION["validar"]){

echo '<script>location.href="index.php"</script>';

	exit();
}else{
	include "views/modules/Capacitacionexcel.php";
}