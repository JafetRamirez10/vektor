<?php 
require_once "models/conexio.php";
require_once "models/TiposModel.php";
require_once "controllers/TiposController.php";
session_start();

if(!$_SESSION["validar"]){

echo '<script>location.href="index.php"</script>';

	exit();
}else{
	include "views/modules/tiposexcel.php";
}